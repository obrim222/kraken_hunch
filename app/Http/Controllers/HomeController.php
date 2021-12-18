<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BlogModel;

class HomeController extends Controller
{
    public function index()
    {
                
        return view('home');
    }



    public function showblogs()
    {

        $blog = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);
    
        $home2 = DB::table('users')
        ->join('tips', 'tips.user_id', '=', 'users.id')
        ->select(
            'users.id AS id',
            'users.first_name AS firstname',
            'users.last_name AS lastname',
            DB::raw("count(tips.user_id) AS total")
        )
        ->groupBy('users.id')
        ->groupBy('users.first_name')
        ->groupBy('users.last_name')
        ->get();

        $home2 = collect($home2)->sortBy('total')->reverse()->toArray();

  
       return view('home')->with(['blogs' => $blog,  'home2' => $home2]);
        
    }

  
}
