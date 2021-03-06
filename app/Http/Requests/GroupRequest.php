<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'faculty_id' => 'required|exists:faculties,id',
            'name' => 'required'
        ];
    }
}
