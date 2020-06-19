<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'date' => 'required',
            'totalPrice' => 'required|min:1|max:99999999'
        ];
    }
    public function messages()
    {
        return [
            'date.required' => trans('order.errors.date.required'),
            'totalPrice.required' => trans('order.errors.totalPrice.required'),
            'totalPrice.required' => trans('order.errors.totalPrice.required'),
            'totalPrice.min' => trans('order.errors.totalPrice.min'),
            'totalPrice.max' => trans('order.errors.totalPrice.max')
        ];
    }
}
