<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showloginForm()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided password maybe incorrect.',
        ]);
    }

      public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful!');
    }

}
