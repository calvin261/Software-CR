<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestUpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($user)
    {


        $values = [
            'name' => 'required|min:3|max:30',
            'email' => ['required','email', Rule::unique('users','email')->ignore($user !== null? $user['id']:$user)],
            'role' => 'required|in:administrador,gerente,supervisor,basico',
            'profile_photo_path' => 'nullable|image'
        ];

        if(!$user){
            $validation_password = [
                'password' => 'required|confirmed'
            ];
            $values = array_merge($values, $validation_password);
        }

        return $values;
    }
}
