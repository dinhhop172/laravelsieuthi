<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'desc' => 'required|min:5|max:250',
            'image' => 'required',
            'price' => 'required',
            'product_brand_id' => 'required'

        ];
    }
    public function messages(){
        return [
            'name.required' => trans('product.errors.name.required'),
            'name.min' => trans('product.errors.name.min'),
            'name.max' => trans('product.errors.name.max'),
            'desc.required' => trans('product.errors.desc.required'),
            'desc.min' => trans('product.errors.desc.min'),
            'desc.max' => trans('product.errors.desc.max'),
            'image.required' =>trans('product.errors.image.required'),
            'price.required' =>trans('product.errors.price.required'),
            'product_brand_id.required' =>trans('product.errors.product_brand_id.required'),
        ];
    }
}
