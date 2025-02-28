<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле необходимо для заполнения',
            'name.string' => 'Необходимо использовать строчный тип данных',
            'email.required' => 'Поле необходимо для заполнения',
            'email.email' => 'Неккоректный тип email',
            'email.string' => 'Необходимо использовать строчный тип данных',
            'email.unique' => 'Данный email уже существует',
            'password.required' => 'Поле необходимо для заполнения',
            'password.string' => 'Необходимо использовать строчный тип данных',
            'role.required' => 'Поле необходимо для заполнения'
        ];
    }
}
