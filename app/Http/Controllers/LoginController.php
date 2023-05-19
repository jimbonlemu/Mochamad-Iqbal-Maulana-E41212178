<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $student = Student::where('username', $credentials['username'])->first();

        if ($student && Hash::check($credentials['password'], $student->password)) {
            // Jika autentikasi berhasil
            Auth::login($student);
            return redirect()->intended('/dashboard');
        } else {
            // Jika autentikasi gagal
            return redirect()->back()->withInput()->withErrors(['login' => 'username atau password salah']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
