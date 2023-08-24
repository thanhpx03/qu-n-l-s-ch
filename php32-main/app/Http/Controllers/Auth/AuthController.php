<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (\request()->method() == 'GET') {
            // Xử lý hiển thị form
            return view('auth.login');
        } else {
            // Xử lý đăng nhập
            $credentials = [
                'email' => \request('email'),
                'password' => \request('password')
            ];

            if (Auth::attempt($credentials)) {
                \request()->session()->regenerate();

                if (\request()->user()->type == 'admin') {
                    return redirect()->route('admin.dashboard');
                }

                return redirect()->intended('/');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Auth::logout();

        \request()->session()->invalidate();

        \request()->session()->regenerateToken();

        return redirect('/');
    }
}
