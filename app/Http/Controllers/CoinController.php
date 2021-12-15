<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use App\Models\CoinData;

class CoinController extends Controller
{


    public function index()
    {
        $coin_data  = DB::table('coin_data')
            ->select('*')

            ->get();


        // return response()->view('coins', compact($coin_data));
        return view('coins', ['coin_data' => $coin_data]);
    }
}
