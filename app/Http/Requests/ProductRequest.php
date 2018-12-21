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
			'name' => 'required | string |' ,
            'price' => 'required | numeric | min:100.00 | max:9999.99',
            'color' => 'required | integer |',
			'stock' => 'required | numeric | min:0 | max:25',                                  
			'category_id' => 'required | integer',
			'brand_id' => 'required | integer',
			'image' => 'required | image',
		];
    }

    public function messages()
	{
		return [
			'required' => 'El campo es obligatorio',
			'name.string' => 'El nombre solo admite letras',
			'price.numeric' => 'El precio solo admite números',
			'price.min' => 'El precio mínimo es 100.00',
            'price.max' => 'El precio máximo es 9999.99',
            'stock.numeric' => 'El valor de stock debe ser numerico',
            'stock.min' => 'El valor de stock minimo es de 1',
            'stock.max' => 'El valor de stock maximo es de 25',
            'image.image' => 'La imagen tiene que ser un formato valido',
		];
	}
}
