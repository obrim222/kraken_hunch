<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoinModel;
use Illuminate\Database\Eloquent\Model;

class CoinController extends Controller
{
    public function index()
    {
        $coins = CoinModel::all();

        return view("coins", ["coins" => $coins]);
    }
}
