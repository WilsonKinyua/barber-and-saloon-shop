<?php

namespace App\Http\Requests;

use App\Models\Barber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBarberRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('barber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:barbers,id',
        ];
    }
}
