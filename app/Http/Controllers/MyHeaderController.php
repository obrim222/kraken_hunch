<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class HeaderController extends Controller
{
    public function index()
    {
       // $account = Account::all();

        //  return view("home", ["accountdata" => $account]);
    }
}
