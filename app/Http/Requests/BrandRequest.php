<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('brand.errors.name.required'),
            'name.max' => trans('brand.errors.name.max'),
            'name.min' => trans('brand.errors.name.min'),
        ];
    }
}
