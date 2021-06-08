<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBarberRequest;
use App\Http\Requests\StoreBarberRequest;
use App\Http\Requests\UpdateBarberRequest;
use App\Models\Barber;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BarbersController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('barber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $barbers = Barber::with(['media'])->get();

        return view('admin.barbers.index', compact('barbers'));
    }

    public function create()
    {
        abort_if(Gate::denies('barber_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.barbers.create');
    }

    public function store(StoreBarberRequest $request)
    {
        $barber = Barber::create($request->all());

        if ($request->input('photo', false)) {
            $barber->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $barber->id]);
        }

        return redirect()->route('admin.barbers.index');
    }

    public function edit(Barber $barber)
    {
        abort_if(Gate::denies('barber_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.barbers.edit', compact('barber'));
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

        return redirect()->route('admin.barbers.index');
    }

    public function show(Barber $barber)
    {
        abort_if(Gate::denies('barber_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $barber->load('barberBookings');

        return view('admin.barbers.show', compact('barber'));
    }

    public function destroy(Barber $barber)
    {
        abort_if(Gate::denies('barber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $barber->delete();

        return back();
    }

    public function massDestroy(MassDestroyBarberRequest $request)
    {
        Barber::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('barber_create') && Gate::denies('barber_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Barber();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
