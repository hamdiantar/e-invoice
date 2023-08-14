<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        $id = auth()->id();
        return [
            'name' => 'required|min:1|max:100',
            'email' => 'required|max:200|email|unique:users,email,'.$id.',id',
            'password' => 'nullable|min:6',
            'phone' => 'required',
        ];
    }
}
