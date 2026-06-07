<?php

namespace App\Service\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function login(array $credentials, bool $remember = false)
    {
        return Auth::guard('admin')->attempt($credentials, $remember);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
