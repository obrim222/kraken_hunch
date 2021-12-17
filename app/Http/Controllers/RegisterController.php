<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
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



        $user = new CustomUser;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;


        auth()->attempt($request->only('email', 'password'));

        $user->save();

        //Authentication

        if ($user->save()) {

            auth()->attempt($request->only('email', 'password'));
            event(new Registered($user));
            return response()->json(['success' => 'User is registered!']);
        } else {
            return response()->json(['error' => 'Error registering the user']);
        }
    }
}
