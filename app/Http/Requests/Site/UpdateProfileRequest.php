<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'description' => ['nullable'],
            'description_partner' => ['nullable'],
            'beard' => ['nullable'],
            'residing_in' => ['nullable'],
            'nationality' => ['nullable'],
            'smoking' => ['nullable'],
            'listening_to_songs' => ['nullable'],
            'long' => ['nullable'],
            'weight' => ['nullable'],
            'educational_qualification' => ['nullable'],
            'type_of_hair' => ['nullable'],
            'color_of_hair' => ['nullable'],
            'financial_status' => ['nullable'],
            'wants_marriage' => ['nullable'],
            'color_of_eye' => ['nullable'],
            'color_of_skin' => ['nullable'],
            'desired_type_of_marriage' => ['nullable'],
            'working_field' => ['nullable'],
            'marital_status' => ['nullable'],
            'health_status' => ['nullable'],
            'religiosity' => ['nullable'],
            'commitment_to_prayer' => ['nullable'],
            'annual_income' => ['nullable'],
            'number_of_children' => ['nullable'],
            'desire_to_have_children' => ['nullable'],
        ];
    }
}
