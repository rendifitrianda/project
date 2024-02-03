<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_handphone' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nama.required' => 'Field nama wajib diisi' ,
            'email.required' => 'Field Email wajib diisi',
            'password.required' => 'Field password wajib diisi',
            'no_handphone' => 'Field No Handphone wajib diisi'
        ];
    }
}
