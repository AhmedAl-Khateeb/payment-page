<?php

namespace App\Service\Admin;

use App\Models\Admin;
use App\Models\AdminPanelSetting;
use App\Traits\GeneratesImageUrls;

class AdminPanelSettingService
{
    use GeneratesImageUrls;

    public function index()
    {
        $data = AdminPanelSetting::where('com_code', auth('admin')->user()->com_code)->get();
        foreach ($data as $item) {
            if ($item->updated_by) {
                $item->updated_by_admin = Admin::where('id', $item->updated_by)->value('name');
            }
        }

        return $data;
    }

    public function store(array $data)
    {
        $data = AdminPanelSetting::query()->create($data);
        $data->logo = $this->generateImageUrl($data->logo);

        return $data;
    }

    public function show(int $id)
    {
        $setting = AdminPanelSetting::query()->findOrFail($id);
        $setting->logo = $this->generateImageUrl($setting->logo);

        return $setting;
    }

    public function update(array $data, int $id)
    {
        $adminPanelSetting = AdminPanelSetting::query()->findOrFail($id);
        $adminPanelSetting->update($data);
        $adminPanelSetting->logo = $this->generateImageUrl($adminPanelSetting->logo);

        return $adminPanelSetting;
    }

    public function delete(int $id)
    {
        $adminPanelSetting = AdminPanelSetting::query()->findOrFail($id);
        $adminPanelSetting->delete();

        return $adminPanelSetting;
    }

    public function updateStatus(int $id)
    {
        $setting = AdminPanelSetting::findOrFail($id);
        $setting->active = !$setting->active;
        $setting->save();

        return $setting;
    }
}
