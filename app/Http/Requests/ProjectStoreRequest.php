<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "name"=>'required|string|max:50'
        ];

    }
    public function messages(){
        return [
            "name.required"=>"name обязательное поле",
            "name.string"=>"значение name должно быть string",

        ];
    }
}
