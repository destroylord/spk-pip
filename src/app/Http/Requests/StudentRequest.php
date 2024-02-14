<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'gender' => 'required|in:male,female',
            'birth_place' => 'required|string',
            'birth_date' => 'required|date',
            'religion' => 'required|string',
            'kindergarten' => 'required|string',
            'kindergarten_address' => 'required|string',
            'home_address' => 'required|string',
            'village' => 'required|string',
            'sub_district' => 'required|string',
            'regency' => 'required|string',
            'father_name' => 'required|string',
            'father_occupation' => 'required|string',
            'father_address' => 'required|string',
            'father_birth_place' => 'required|string',
            'father_birth_date' => 'required|date',
            'mother_name' => 'required|string',
            'mother_occupation' => 'required|string',
            'mother_address' => 'required|string',
            'mother_birth_place' => 'required|string',
            'mother_birth_date' => 'required|date',
        ];
    }
}
