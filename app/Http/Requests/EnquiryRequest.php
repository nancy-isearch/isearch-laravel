<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'        => 'required|string|min:2|max:100',
            'mobile'      => 'required|string|min:7|max:15',
            'dial_code'   => 'nullable|string|max:10',
            'email'       => 'required|email|max:255',
            'url'         => 'nullable|url|max:255',
            'service'     => 'required|string|max:255',
            'requirement' => 'required|string|min:10|max:2000',

            // 'g-recaptcha-response' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'mobile.required' => 'Mobile number is required.',
            'email.required' => 'Email is required.',
            'service.required' => 'Please select a service.',
            'requirement.required' => 'Requirement is required.',
            // 'g-recaptcha-response.required' => 'Captcha verification required.'
        ];
    }
}