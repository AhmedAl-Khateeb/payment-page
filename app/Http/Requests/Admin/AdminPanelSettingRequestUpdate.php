<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminPanelSettingRequestUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'system_name' => 'nullable|array',
            'system_name.ar' => 'nullable|string',
            'system_name.en' => 'nullable|string',

            'general_alert' => 'nullable|array',
            'general_alert.ar' => 'nullable|string',
            'general_alert.en' => 'nullable|string',

            'address' => 'nullable|array',
            'address.ar' => 'nullable|string',
            'address.en' => 'nullable|string',

            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'nullable|string|max:20',
            'com_code' => 'nullable|string|max:20',
        ];
    }

   
}
