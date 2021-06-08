<?php

namespace App\Http\Requests;

use App\Models\Barber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBarberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('barber_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:barbers,name,' . request()->route('barber')->id,
            ],
            'professional' => [
                'string',
                'nullable',
            ],
        ];
    }
}
