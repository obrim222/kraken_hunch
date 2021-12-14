<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoinModel;

class CoinController extends Controller
{



    public function index()
    {
        $coins = CoinModel::all();

        return view('coins', ['coins' => $coins]);
        dd($coins);
    }
}
