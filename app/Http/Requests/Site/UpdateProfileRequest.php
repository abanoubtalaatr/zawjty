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
            'country_id' => ['nullable'],
            'nationality_id' => ['nullable'],
            'age_id' => ['nullable'],
            'long_id' => ['nullable'],
            'weight_id' => ['nullable'],
            'hair_type_id' => ['nullable'],
            'hair_color_id' => ['nullable'],
            'color_eye_id' => ['nullable'],
            'color_skin_id' => ['nullable'],
            'health_status_id' => ['nullable'],
            'religiosity_id' => ['nullable'],
            'beard_id' => ['nullable'],
            'commitment_prayer_id' => ['nullable'],
            'smooking_id' => ['nullable'],
            'music_id' => ['nullable'],
            'eduction_id' => ['nullable'],
            'working_id' => ['nullable'],
            'financial_status_id' => ['nullable'],
            'annual_income_id' => ['nullable'],
            'want_married_id' => ['nullable'],
            'marriage_type_id' => ['nullable'],
            'marital_status_id' => ['nullable'],
            'having_children_id' => ['nullable'],
        ];
    }
}
