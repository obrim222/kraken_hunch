<?php

namespace App\Http\Controllers;
use App\Models\Tip;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dropdown;




class TipsController extends Controller
{
    public function index()
    {
        //connection with database
        $tipsdata = Tip::all();
            return view('tipsFolder.tips', ['tipsArray' => $tipsdata]);     
    }


    public function create(){

        //$currency_types = DB::table('tips')->get();  //Dropdown get tip_currency table data from DB

        return view('tipsFolder.create');
    }


    public function store(Request $request){

        $tip = new Tip();

        $tip->tip_currency = $request->tip_currency;
        $tip->price_at_time_of_tip = $request->price_at_time_of_tip;
        $tip->date_now = $request->date_now;
        $tip->date_end = $request->date_end;
        $tip->reason_up = $request->reason_up;
        $tip->reason_down = $request->reason_down;
        $tip->reason_description = $request->reason_description;
        $tip->calculated_tip_price = $request->calculated_tip_price;
        $tip->reason_description = $request->reason_description;
        $tip->tip_percentage = $request->tip_percentage;
        $tip->coin_id = $request->coin_id;
        $tip->coin_id = $request->coin_id;


        


        
        
        
        //Data truncated v
        
    


        //$tip->currency_uniswap = $request->currency_uniswap;
        //$tip->currency_cardano = $request->currency_cardano;
        //$tip->currency_chiliz = $request->currency_chiliz;
        //$tip->currency_the_sandbox = $request->currency_the_sandbox;
        //$tip->currency_etherum = $request->currency_etherum;


    
        

        
        $tip->save();

        return back()->with('error', 'sth wrong with db');

        return redirect('/tips');

    }

/*
    public function storeDropDownItems(Request $request)
    { 
        //dropdown model, 
        $tip = new Dropdown();
      

        $tip->tip_currency = $request->tip_currency;
        $tip->tip_percentage=$request->tip_percentage;
        $tip->tip_direction=$request->tip_direction;


        $tip->save();  
    
    }


 
        $tip->currency_eur = $request->currency_eur;
        $tip->currency_hunch = $request->currency_hunch;


        $tip->tip_direction_up = $request->tip_direction_up;
        $tip->tip_direction_down = $request->tip_direction_down;





        //error_log($tipsave);
      
      
        $tip->date_now = request('date_now');
        $tip->date_end = request('date_end');
       


        $tip->tip_percentage_30 = request('tip_percentage_30');
        $tip->tip_percentage_40 = request('tip_percentage_40');
        $tip->tip_percentage_50 = request('tip_percentage_50');

        


        $tip->reason_up_major_roadmap_releases_success = request('reason_up_major_roadmap_releases_success');
        $tip->reason_up_stock_market = request('reason_up_stock_market');
        $tip->reason_up_influencers_backing_the_project = request('reason_up_influencers_backing_the_project');
        $tip->reason_up_money_printing = request('reason_reason_up_money_printing');
        $tip->reason_up_instinct_of_the_expert = request('reason_up_instinct_of_the_expert');


        $tip->reason_down_major_roadmap_releases_success = request('reason_down_major_roadmap_releases_success');
        $tip->reason_down_stock_market = request('reason_down_stock_market');
        $tip->reason_down_influencers_slating_the_project = request('reason_down_influencers_slating_the_project');
        $tip->reason_down_instinct_of_the_expert = request('reason_down_instinct_of_the_expert');
        $tip->reason_down_frud = request('reason_down_frud');


       

        $tip->save();
      

        
        // kasia: @csrf after clicking on submit the tip it redirects to tips now

    }
};

/*


    public function edit($id){

        $tip = Tip::findOrFail($id);
        return view('tipsFolder.edit',['tip' => $tip]);

    }


    public function update($id){

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

    
    public function showSingleTip($id){
        $tip = Tip::findOrFail($id);

        return view('tipsFolder.showSingleTip', ['tip' => $tip]) ;
    }

      // kasia: problem with ennum to be solved
        //$tipsave->tip_reason = request('tip_reason');
        //$tipsave->tip_direction = request('tip_direction');
   

    */
    

   
}


