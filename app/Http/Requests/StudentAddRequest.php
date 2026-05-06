<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentAddRequest extends FormRequest
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
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:students,email',
            'age'           => 'required|integer|min:1',
            'date_of_birth' => 'required|date',
            'gender'        => 'required|in:male,female',
            'score'         => 'required|numeric|min:0|max:100',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'          => 'Name is required.',
            'email.required'         => 'Email is required.',
            'email.email'            => 'Enter a valid email address.',
            'email.unique'           => 'This email is already taken.',
            'age.required'           => 'Age is required.',
            'age.integer'            => 'Age must be a number.',
            'date_of_birth.required' => 'Date of birth is required.',
            'gender.required'        => 'Gender is required.',
            'score.required'         => 'Score is required.',
            'score.numeric'          => 'Score must be a number.',
            'score.min'              => 'Score cannot be less than 0.',
            'score.max'              => 'Score cannot be more than 100.',
            'image.image'           => 'The file must be an image.',
            'image.mimes'           => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'             => 'The image may not be greater than 2MB.',
        ];
    }
}
