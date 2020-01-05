<?php

namespace App\Http\Requests;

use App\Attribute;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAttributeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('attribute_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:attributes,name,' . request()->route('attribute')->id,
            ],
        ];
    }
}
