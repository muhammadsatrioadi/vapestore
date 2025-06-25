<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        // Cek domain email untuk admin
        if (str_ends_with($user->email, '@admin.com')) {
            // Redirect ke halaman landing untuk admin
            return redirect()->to('/landing');
        }

        // Cek domain email untuk user biasa
        if (str_ends_with($user->email, '@gmail.com')) {
            // Redirect ke halaman user
            return redirect()->to('/user');
        }

        // Logout jika domain email tidak sesuai
        Auth::logout();
        return redirect()->route('login')->withErrors([
            'email' => 'Email domain tidak valid.',
        ]);
    }
}
