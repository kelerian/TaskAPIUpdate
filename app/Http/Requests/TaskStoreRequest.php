<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "title"=>"required|string|max:50",
            "description"=>"required|string",
            "type_id"=>"required|integer|lte:3|gte:0",
            "status_id"=>"required|integer|lte:4|gte:0",
        ];
    }

}
