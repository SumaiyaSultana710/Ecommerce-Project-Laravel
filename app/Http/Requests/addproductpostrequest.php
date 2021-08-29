<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addproductpostrequest extends FormRequest
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
            'product_name' => 'required',
            'category' => 'required',
            'feature' => 'required',
            'price' => 'required',
            'image' => 'required',
            'os' => 'required',
            'display' => 'required',
            'processor' => 'required',
            'graphics' => 'required',
            'memory' => 'required',
            'hard_drive' => 'required',
            'power_supply' => 'required',
            'battery' => 'required',
        ];
    }
}
