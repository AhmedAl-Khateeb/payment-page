<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Service\Admin\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(private readonly LoginService $loginService)
    {
    }

    public function show_login()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if ($this->loginService->login($credentials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.', ]);
    }

    public function logout(Request $request)
    {
        $this->loginService->logout($request);

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
