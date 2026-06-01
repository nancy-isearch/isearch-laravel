<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreIconRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255|unique:icons,name',

            'icon' => 'required|string|max:255|unique:icons,icon',

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
            'name.unique' => 'This icon name already exists.',

            'icon.required' => 'Icon value is required.',
            'icon.unique' => 'This icon already exists.',
        ];
    }
}
