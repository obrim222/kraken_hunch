<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    //added join for three tables
    public function show()
    {
        // $home = Tip::join('users', 'tips.user_id', '=', 'users.id')
        //    ->join('coin_data',  'coin_data.id', '=', 'tips.coin_id')
        //     ->get(['tips.*', 'users.first_name', 'coin_data.name']);


        //$home = Tip::join('users', 'tips.user_id', '=', 'users.id');

        // dd($home);
        //connection with database
        //  $tipsdata = Tip::all();



        //        DB::table("tips")
        //      ->join("users", function ($join) {
        //            $join->on("users.id", "=", "tips.user_id")
        //                ->where("tips.winlose_flag", "=", "W");
        //       })->select("users.*",  DB::raw('COUNT(tips.winlose_flag) as count'))->groupBy('users.id')
        //       ->get();


        $home = DB::table('users')
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



        return view('home', ['home' => $home]);
    }
}
