<?php

namespace App\Service\Admin;

use App\Models\User;

class DashboardService
{
    public function dashboard()
    {
        $usersCount = User::count();

        return view('admin.dashboard', compact('usersCount'));
    }
}
