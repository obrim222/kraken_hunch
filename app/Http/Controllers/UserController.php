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
            'password' => 'required'
       
        ]);

        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
       

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
  
  
/*
    public function delete($id)
    {
        echo "test";
      $users = DB::find($id);
      $users->delete();
    // return redirect('adminPage');
}



*/
public function delete($id)
{

    $result = DB::delete('DELETE FROM users WHERE id = ?', [$id]);

    if ($result)
        return back()->with('success', 'Comment was deleted from the DB');
    else
        return back()->with('error', 'Error deleting comment');
}


public function show()
{
    $users = User::all();

    return view("adminPage", ["users" => $users]);
}

}
