<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Category;
use App\Http\Controllers\Tip;
use Illuminate\Support\Facades\DB;
use App\Models\Dropdown;

class DropDownController extends Controller
{
    public function index()
    {
       $currency_types = DB::table('tips')->get();  //get tip_currency table data from DB
        
       return view('tipsFolder.dropdown');

    
    }


    public function store(Request $request)
    { 
        //dropdown model, 
        $tip = new Dropdown();
      
        $tip->tip_currency = $request->tip_currency;
        //$tip->tip_percentage=$request->tip_percentage;
       // $tip->tip_direction=$request->tip_direction;

        $tip->save();  
    
    }
}

