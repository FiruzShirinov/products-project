<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'article'   =>  [
                                'required', 'alpha_num', Rule::unique('products')->ignore($this->product),
                            ],
            'name'      => 'required|min:10',
            'status'    => 'required|string',
            'data'      => 'nullable'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'article'   => 'Артикул продукта',
            'name'      => 'Название продукта',
        ];
    }
}
