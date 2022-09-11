<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;




class UserStoreRequest extends FormRequest
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
            'nama' => 'required|unique:user,nama',
            'username' => 'required|unique:user,username',
            'jenis_kelamin' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'no_handphone' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nama.required' => ' *nama wajib di isi',
            'username.required' => ' *Username wajib di isi',
            'username.unique' => '*Username sudah terpakai',
            'nama.unique' => '*nama sudah terpakai',
            'jenis kelamin.required' => ' *jenis kelamin wajib di isi',
            'email.required' => '*email wajib di isi',
            'email.email' => ' *Email tidak valid',
            'password.required' => ' *Password wajib di isi',
            'no_handphone.required' => '*No Hp wajib di isi',

        ];
    }
}
