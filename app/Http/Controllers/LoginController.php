<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function login()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {

<<<<<<< refs/remotes/origin/main
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
=======
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('home')->with('success', 'You are logged in');
        }
        return back()->with('error', 'Invalid Login information');
>>>>>>> Login and Register
    }
}
