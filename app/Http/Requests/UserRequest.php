<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:1|max:100',
            'last_name' => 'required|min:1|max:100',
            'email' => 'required|email|unique:users|max:200',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required|min:11',
            'roles' => 'required',
        ];
    }
}
