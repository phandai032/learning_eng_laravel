<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            echo 'login thành công';
        } else {
            // Đăng nhập thất bại
            return back()->withErrors(['email' => 'Thông tin đăng nhập không đúng']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
