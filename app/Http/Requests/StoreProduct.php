<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'code' => 'required|unique:products,code,'. $this->id . ',id|regex:/^([A-Z]){2,3}\d{5}$/',
            'name' => 'required|unique:products,name,'. $this->id . ',id|max:255',
            'description' => 'required',
        ];
    }
}
