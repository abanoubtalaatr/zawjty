<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required',' string', 'min:3','max:6'],
            'email' => ['required', 'email', 'unique:users,email'],
            'birth_day'  => ['required', 'date'],
            'gender' => ['required', Rule::in('ذكر', 'انثي')],
            'password' => ['required', 'min:8'],
            'country_id' => ['required', 'exists:countries,id'],
        ];
    }
}
