<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private $adminCredentials = [
        'admin@travelmarket.com' => [
            'password' => 'admin123',
            'name' => 'Travel Admin',
            'role' => 'Administrator'
        ],
        'manager@travelmarket.com' => [
            'password' => 'manager123',
            'name' => 'Travel Manager',
            'role' => 'Manager'
        ],
        'supervisor@travelmarket.com' => [
            'password' => 'supervisor123',
            'name' => 'Travel Supervisor',
            'role' => 'Supervisor'
        ]
    ];

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login', ['credentials' => $this->adminCredentials]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (isset($this->adminCredentials[$email]) && $this->adminCredentials[$email]['password'] === $password) {
            session([
                'admin_logged_in' => true,
                'admin_user' => $this->adminCredentials[$email]['name'],
                'admin_email' => $email,
                'admin_role' => $this->adminCredentials[$email]['role']
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user', 'admin_email', 'admin_role']);
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}