<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceCategoryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('service_category');

        return [
            'name' => 'required|string|max:255|unique:service_categories,name,' . $id,

            'slug' => 'nullable|string|max:255|unique:service_categories,slug,' . $id,

            'icon_id' => 'nullable|exists:icons,id',

            'status' => 'nullable|boolean',

            'sort_order' => 'nullable|integer|min:0',
        ];
    }

    /**
     * Custom Messages
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Category name is required.',

            'icon_id.exists' => 'Invalid icon selected.',
        ];
    }
}
