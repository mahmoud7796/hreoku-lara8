<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'brand_name'=> 'required',
            'brand_image'=> 'required_without:id|mimes:jpg,bmp,png',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'brand_image.required_without' => 'هذا الحقل مطلوب',
            'in' => 'القيم المدخلة غير صحيحة ',
            'name.string' => 'اسم اللغة لابد ان يكون احرف',
            'abbr.max' => 'هذا الحقل لابد الا يزيد عن 10 احرف ',
            'abbr.string' => 'هذا الحقل لابد ان يكون احرف ',
            'name.max' => 'اسم اللغة لابد الا يزيد عن 100 احرف ',
        ];
    }
}
