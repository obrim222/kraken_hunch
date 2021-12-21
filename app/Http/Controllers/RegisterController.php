<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',


        ]);



        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;


        //auth()->attempt($request->only('email', 'password'));


        //Authentication

        if ($user->save()) {

            event(new Registered($user));

            //Auth::login($user);

            return back()->with('success', 'Please verify the email ');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }
}