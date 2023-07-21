<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
                'name_ar'        => "required|max:255",
                'name_en'        => "required|max:255",
                'desc_ar'        => "required",
                'desc_en'        => "required",
                'written_at_ar'  => "required",
                'written_at_en'  => "required",
                'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
        else{
            return [
                'name_ar'        => "required|max:255",
                'name_en'        => "required|max:255",
                'desc_ar'        => "required",
                'desc_en'        => "required",
                'written_at_ar'  => "required",
                'written_at_en'  => "required",
                'image'          => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
    }

    public function messages()
    {
        return [
            'name_ar.required'       => 'يجب ادخال اسم الشخص باللغة العربية',
            'name_en.required'       => 'يجب ادخال اسم الشخص باللغة الانجليزية',
            'desc_ar.required'       => 'يجب ادخال التعليق باللغة العربية',
            'desc_en.required'       => 'يجب ادخال التعليق باللغة الانجليزية',
            'written_at_ar.required' => 'يجب ادخال وسيلة التعليق باللغة العربية',
            'written_at_en.required' => 'يجب ادخال وسيلة التعليق باللغة الانجليزية',
            'image.required'         => 'يجب رفع صورة',
        ];
    }
}
