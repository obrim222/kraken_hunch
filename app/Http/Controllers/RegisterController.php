<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{


    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validations

        $request->validate([

            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required',

        ]);

        $user = new CustomUser;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;


        auth()->attempt($request->only('email', 'password'));

        if ($user->save()) {
            return redirect('home')->with('success', 'User registered in the database');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }
}
