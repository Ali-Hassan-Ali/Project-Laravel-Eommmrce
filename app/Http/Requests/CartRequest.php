<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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

    public function rules()
    {
        return [
            'cart_name'            => 'required',
            'cart_name_en'         => 'required',
            'cart_text'       => 'required',
            'cart_text_en'    => 'required',
            'market_id'       => 'required',
            'sub_category_id' => 'required',
            'count_of_buy'    => 'required',
            'ar_price'        => 'required',
            'amrecan_price'   => 'required',
            'kowit_price'     => 'required',
            'amarat_price'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cart_name.required'            => trans('validation.required'),
            'cart_name_en.required'         => trans('validation.required'),
            'cart_text.required'       => trans('validation.required'),
            'cart_text_en.required'    => trans('validation.required'),
            'market_id.required'       => trans('validation.required'),
            'sub_category_id.required' => trans('validation.required'),
            'count_of_buy.required'    => trans('validation.required'),
            'ar_price.required'        => trans('validation.required'),
            'amrecan_price.required'   => trans('validation.required'),
            'kowit_price.required'     => trans('validation.required'),
            'amarat_price.required'    => trans('validation.required'),
        ];
    }
}
