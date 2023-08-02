<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderWayRequest extends FormRequest
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
                'link'  => "required",
                'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
        else{
            return [
                'title_ar' => "required|max:255",
                'title_en' => "required|max:255",
                'link'  => "required",
                'image'     => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            ];
        }
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'يجب ادخال الاسم باللغة العربية',
            'title_en.required' => 'يجب ادخال الاسم باللغة الانجليزية',
            'link.required' => 'يجب ادخال الرابط حتي يتمكن العملاء من الطلب',
            'image.required' => 'يجب رفع صورة',
        ];
    }
}
