<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateIconRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('icon');
        return [
            'name' => 'required|string|max:255|unique:icons,name,' . $id,

            'icon' => 'required|string|max:255|unique:icons,icon,' . $id,

            'status' => 'nullable|boolean',
        ];
    }

    /**
     * Custom Messages
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Icon name is required.',
            'icon.required' => 'Icon field is required.',
        ];
    }
}
