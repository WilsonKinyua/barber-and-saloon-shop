<?php

namespace App\Http\Requests;

use App\Models\Barber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBarberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('barber_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:barbers',
            ],
            'professional' => [
                'string',
                'nullable',
            ],
            'photo' => [
                'required',
            ],
        ];
    }
}
