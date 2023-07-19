<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fileUpLoadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'photo' => ['required', 'image']
        ];
    }
    public function message() {
        return [
            'name.required'=>"Required name!",
        ];
    }
}
