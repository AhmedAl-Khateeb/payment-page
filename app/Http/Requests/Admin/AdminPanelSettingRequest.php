<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminPanelSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'system_name' => 'required|array',
            'system_name.ar' => 'required|string',
            'system_name.en' => 'required|string',

            'general_alert' => 'required|array',
            'general_alert.ar' => 'required|string',
            'general_alert.en' => 'required|string',

            'address' => 'required|array',
            'address.ar' => 'required|string',
            'address.en' => 'required|string',

            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required|string|max:20',
            'com_code' => 'required|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'system_name.required' => __('menu.The system name field is required.'),
            'system_name.ar.required' => __('menu.The system name (Arabic) field is required.'),
            'system_name.en.required' => __('menu.The system name (English) field is required.'),

            'general_alert.required' => __('menu.The general alert field is required.'),
            'general_alert.ar.required' => __('menu.The general alert (Arabic) field is required.'),
            'general_alert.en.required' => __('menu.The general alert (English) field is required.'),

            'address.required' => __('menu.The address field is required.'),
            'address.ar.required' => __('menu.The address (Arabic) field is required.'),
            'address.en.required' => __('menu.The address (English) field is required.'),

            'phone.required' => __('menu.The phone field is required.'),
            'com_code.required' => __('menu.The com code field is required.'),
        ];
    }
}
