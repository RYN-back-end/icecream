<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                'title_ar' => "required|max:255",
                'title_en' => "required|max:255",
                'desc_ar'  => "required",
                'desc_en'  => "required",
                'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
        else{
            return [
                'title_ar' => "required|max:255",
                'title_en' => "required|max:255",
                'desc_ar'  => "required",
                'desc_en'  => "required",
                'image'     => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'يجب ادخال اسم القسم باللغة العربية',
            'title_en.required' => 'يجب ادخال اسم القسم باللغة الانجليزية',
            'desc_ar.required' => 'يجب ادخال وصف القسم باللغة العربية',
            'desc_en.required' => 'يجب ادخال وصف القسم باللغة الانجليزية',
            'image.required' => 'يجب رفع صورة',
        ];
    }}
