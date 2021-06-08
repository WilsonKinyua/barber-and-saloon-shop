<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreBarberRequest;
use App\Http\Requests\UpdateBarberRequest;
use App\Http\Resources\Admin\BarberResource;
use App\Models\Barber;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BarbersApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('barber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BarberResource(Barber::all());
    }

    public function store(StoreBarberRequest $request)
    {
        $barber = Barber::create($request->all());

        if ($request->input('photo', false)) {
            $barber->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        return (new BarberResource($barber))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Barber $barber)
    {
        abort_if(Gate::denies('barber_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BarberResource($barber);
    }

    public function update(UpdateBarberRequest $request, Barber $barber)
    {
        $barber->update($request->all());

        if ($request->input('photo', false)) {
            if (!$barber->photo || $request->input('photo') !== $barber->photo->file_name) {
                if ($barber->photo) {
                    $barber->photo->delete();
                }
                $barber->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($barber->photo) {
            $barber->photo->delete();
        }

        return (new BarberResource($barber))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Barber $barber)
    {
        abort_if(Gate::denies('barber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $barber->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
