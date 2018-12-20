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
			'name' => 'required | alpha',
			'price' => 'required | numeric | min:100.00 |max:999.99',
			'category_id' => 'required | integer',
			'brand_id' => 'required | integer',
			'image' => 'required | image',
		];
    }

    public function messages()
	{
		return [
			'required' => 'El campo es obligatorio',
			'name.alpha' => 'El campo nombre solo admite letras',
			'price.numeric' => 'El campo precio solo admite números',
			'price.min' => 'El precio mínimo es 10',
			'price.max' => 'El precio máximo es 999.99',
		];
	}
}
