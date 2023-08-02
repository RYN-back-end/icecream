<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        return [
            'second_section_ar' => 'required',
            'second_section_en' => 'required',
            'category_desc_ar' => 'required',
            'category_desc_en' => 'required',
            'flavor_desc_ar' => 'required',
            'flavor_desc_en' => 'required',
            'wholesale_desc_ar' => 'required',
            'wholesale_desc_en' => 'required',
            'about_desc_ar' => 'required',
            'about_desc_en' => 'required',
            'order_desc_ar' => 'required',
            'order_desc_en' => 'required',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ];
    }
}
