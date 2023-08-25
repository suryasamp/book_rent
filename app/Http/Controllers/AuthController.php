<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Stmt\Echo_;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register(Request $request)
    {
        return view('register');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            error_log('Status: ' . Auth::user()->status);
            if (Auth::user()->status != 'active') {
                error_log('Masuk if');
                Auth::logout();
                return redirect('login')->with([
                    'loginError' => 'Account Inactive Please Contact Admin'
                ]);
                // return back()->with([
                //     'loginError' => 'Account Inactive Please Contact Admin'
                // ]);
            }
            error_log('Tidak Masuk if');
            $request->session()->regenerate();
            return redirect('dashboard');
        }
        return back()->with([
            'loginError' => 'Login Invalid'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function registerStore(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'phone' => 'required|min:9',
            'address' => 'required',
        ]);
        $user = User::create($request->all());
        return redirect('/register')->with('message', 'Register Success!, Please Contact Admin to confirm');
    }
}
