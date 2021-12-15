<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {

        return view('login');
    }

    public function store(Request $request)
    {

        // Validations

        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tip_count' => 'required'
        ]);

        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tip_count = $request->tip_count;

        $user->save();

        if ($user->save()) {

            return back()->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }


    public function register()
    {
        return view('register');
    }
}
