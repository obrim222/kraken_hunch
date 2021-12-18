<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Tip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TipsController extends Controller
{

    //added join for three tables
    public function index()
    {
        $tipsdata = Tip::join('users', 'tips.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'tips.coin_id')
            ->get(['tips.*', 'users.first_name', 'coin_data.name']);


            $lb = DB::table('users')
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
    
            $lb = collect($lb)->sortBy('total')->reverse()->toArray();
        //connection with database
        //  $tipsdata = Tip::all();

            //    return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
        return view('tipsFolder.tips')->with(['tipsArray' => $tipsdata,  'lb' => $lb]);
    }


    public function create()
    {

        //$currency_types = DB::table('tips')->get();  //Dropdown get tip_currency table data from DB

        return view('tipsFolder.create');
    }


    public function store(Request $request)
    {




        $id = Auth::id();

        $tip = new Tip();
        $tip->user_id = $id;

        $tip->tip_currency = $request->tip_currency;

        $tip->price_at_time_of_tip = $request->price_at_time_of_tip;

        $tip->date_now = $request->date_now;
        $tip->date_end = $request->date_end;
        $tip->reason_up = $request->reason_up;

        $tip->reason_down = $request->reason_down;
        $tip->reason_description = $request->reason_description;
        $tip->calculated_tip_price = $request->calculated_tip_price;

        $tip->tip_percentage = $request->tip_percentage;
        $tip->coin_id = $request->coin_id;

        $tip->save();
        return back()->with('error', 'sth wrong with db');
        return redirect('/tips');
    }
}

/*
    public function storeDropDownItems(Request $request)
    { 
        //dropdown model, 
        $tip = new Dropdown();
      
*/
   


/*};


    public function showSingleTip($id)
    {
        $tip = Tip::findOrFail($id);

        return view('tipsFolder.showSingleTip', ['tip' => $tip]);
    }


    public function edit($id)
    {

        $tip = Tip::findOrFail($id);
        return view('tipsFolder.edit', ['tip' => $tip]);
    }



    public function update($id)
    {

        $tip = Tip::findOrFail($id);

        $tip->tipper_name = request('tipper_name');
        $tip->title = request('title');
        $tip->tip_text = request('tip_text');
        $tip->coin_name = request('coin_name');

        $tip->price_at_time_of_tip = request('price_at_time_of_tip');
        $tip->calculated_tip_price = request('calculated_tip_price');

        $tip->save();
        return redirect('/tips');
    }
}


/*
        //error_log($tipsave);
    
    public function destroy($id){
        $tip = Tip::findOrFail($id);
        $tip ->delete();
        return redirect('/tips');
    }
    
    /* LATESTS TIPS 
    
    Kasia: add curly brakets & activate once DB has date
    public function latestTips
        $tipsdata = Tip::latest();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
 
    */ 

/*
    public function orderTipsbyDirection()
    {
        $tipsdata = Tip::orderBy('tip_direction')->get();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
    }
    
    public function orderTipsbyCoin()
    {
        $tipsdata = Tip::orderBy('coin_name')->get();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
    }
    public function orderTipsbyReason()
    {
        $tipsdata = Tip::orderBy('tip_reason')->get();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
    }
    /*
    public function wentUp(){
        $tipsdata = Tip::where('tip_direction' , 'up')->get();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);
    }
   
    */
