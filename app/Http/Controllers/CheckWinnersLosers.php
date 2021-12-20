<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\Tip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckWinnersLosers extends Controller
{


public function checkWinnersLosers(){

$tipsdata = Tip::join('users', 'tips.user_id', '=', 'users.id')
->join('coin_data',  'coin_data.id', '=', 'tips.coin_id')
->get(['tips.*', 'users.first_name', 'coin_data.name']);


$client = new CoinGeckoClient();
$data = $client->derivatives()->getExchanges();
$response = $client->getLastResponse();
$headers = $response->getHeaders();

$bitcoinprice = $client->simple()->getPrice('0x,bitcoin', 'eur');
$unisawpprice = $client->simple()->getPrice('0x,uniswap', 'eur');
$todaysdate = date("Y-m-d");

foreach($bitcoinprice as $btc) 
{
    $bit =   $btc['eur'] ;
}

//dd(   $bitcoinprice);
//
foreach($tipsdata as $tip) 
{
    echo $tip->name ; 
    if($tip->name = "bitcoin")
   {
    if(  $tip->date_end <=  $todaysdate ) 
    {
                    
           
            if($tip->calculated_tip_price >= $bit )
            {
             
                if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L"){
                try { 
                    DB::table('tips')
                    ->where('id',   $tip->id)
                    ->update(['winlose_flag' =>  "W"]);
                  
              
                  } catch(\Illuminate\Database\QueryException $ex){ 
                      return ['error' => 'error update user']; 
                  }
                }

            }
            if($tip->calculated_tip_price <= $bit )
            {
                if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L"){
                    try { 
                        DB::table('tips')
                        ->where('id',   $tip->id)
                        ->update(['winlose_flag' =>  "L"]);
                      
                 
            
                      } catch(\Illuminate\Database\QueryException $ex){ 
                          return ['error' => 'error update user']; 
                      }
                    }
            }
        
    }

} 

}
return view('home'); 
}
}
