<?php

namespace App\Http\Requests;

use App\Models\Subscriber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSubscriberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('subscriber_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
            ],
        ];
    }
}
