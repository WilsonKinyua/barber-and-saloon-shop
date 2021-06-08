<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('slider_create');
    }

    public function rules()
    {
        return [
            'caption' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
            'photo' => [
                'required',
            ],
        ];
    }
}
