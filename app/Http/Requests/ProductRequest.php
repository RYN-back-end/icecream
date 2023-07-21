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
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->id){
            return [
                'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
                'title_ar'     => 'required|string|max:255',
                'title_en'     => 'required|string|max:255',
                'desc_ar'      => 'required',
                'desc_en'      => 'required',
                'large_price'  => 'nullable|numeric|min:0',
                'medium_price' => 'nullable|numeric|min:0',
                'small_price'  => 'nullable|numeric|min:0',
                'category_id'  => 'required|exists:categories,id',
            ];
        }
        else{
            return [
                'image'        => 'required|image|mimes:jpeg,png,jpg,gif,webp',
                'title_ar'     => 'required|string|max:255',
                'title_en'     => 'required|string|max:255',
                'desc_ar'      => 'required',
                'desc_en'      => 'required',
                'large_price'  => 'nullable|numeric|min:0',
                'medium_price' => 'nullable|numeric|min:0',
                'small_price'  => 'nullable|numeric|min:0',
                'category_id'  => 'required|exists:categories,id',
            ];
        }
    }
}
