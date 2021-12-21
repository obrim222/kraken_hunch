<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\Tip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckWinnersLosers extends Controller
{


    public function checkWinnersLosers()
    {

        $tipsdata = Tip::join('users', 'tips.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'tips.coin_id')
        ->get(['tips.*', 'users.first_name', 'coin_data.name']);


        $client = new CoinGeckoClient();
        $data = $client->derivatives()->getExchanges();
        $response = $client->getLastResponse();
        $headers = $response->getHeaders();


        $api_url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,cardano,chiliz,uniswap&vs_currencies=eur';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        $prices = json_decode($json_data);
        //dd($prices);
        $todaysdate = date("Y-m-d");
     
        foreach($prices as $i) 
        {
              
            /*Check each value in the database for direction up if there is a Win or Loser ethereum*/
                foreach($tipsdata as $tip)        
                {
                    
                 if($tip->tip_direction == "up" & Str::lower($tip->name) == "ethereum") 
                  {  
            
                 
                        if(  $tip->date_end <=  $todaysdate ) 
                        {           
                   
                                if($tip->calculated_tip_price >= $prices->ethereum->eur)
                            {
                                   
                                if($tip->winlose_flag === NULL)
                                {
                                try { 
                                    DB::table('tips')
                                        ->where('id',   $tip->id)
                                        ->update(['winlose_flag' =>  "W"]);
                                        
                                    
                                        } catch(\Illuminate\Database\QueryException $ex){ 
                                            return ['error' => 'error update user']; 
                                        }
                                    }
                            }
                            if($tip->winlose_flag === NULL )
                                    {
                                        if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L")
                                        {
                                            try { 
                                                DB::table('tips')
                                                ->where('id',   $tip->id)
                                                ->update(['winlose_flag' =>  "L"]);

                                                } catch(\Illuminate\Database\QueryException $ex)
                                                { 
                                                    return ['error' => 'error update user']; 
                                                }
                                        }
                                    }
                                
                        }

                    

                  }      
               
            /*Check each value in the database for direction up if there is a Win or Lose*/
          
             if($tip->tip_direction == "down" & Str::lower($tip->name) == "ethereum" ) 
              {  
   
          
                    if(  $tip->date_end <=  $todaysdate ) 
                    {           
                            if($tip->calculated_tip_price <= $prices->ethereum->eur)
                        {
                                
                            if($tip->winlose_flag === NULL)
                            {
                            try { 
                                DB::table('tips')
                                    ->where('id',   $tip->id)
                                    ->update(['winlose_flag' =>  "W"]);
                                    
                                
                                    } catch(\Illuminate\Database\QueryException $ex){ 
                                        return ['error' => 'error update user']; 
                                    }
                                }
                        }
                            if($tip->calculated_tip_price >= $prices->ethereum->eur )
                                {
                                    if($tip->winlose_flag === NULL)
                                    {
                                        try { 
                                            DB::table('tips')
                                            ->where('id',   $tip->id)
                                            ->update(['winlose_flag' =>  "L"]);

                                            } catch(\Illuminate\Database\QueryException $ex)
                                            { 
                                                return ['error' => 'error update user']; 
                                            }
                                    }
                                }
                            
                    }

                

              }      
                          
                 
            
            /*Check each value in the database for direction up if there is a Win or Loser bitcoin*/
        
            if($tip->tip_direction == "up" & Str::lower($tip->name) == "bitcoin") 
                {  
                  
           
                      if(  $tip->date_end <=  $todaysdate ) 
                      {           
                              if($tip->calculated_tip_price >= $prices->bitcoin->eur)
                          {
                                 
                              if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L")
                              {
                              try { 
                                  DB::table('tips')
                                      ->where('id',   $tip->id)
                                      ->update(['winlose_flag' =>  "W"]);
                                      
                                  
                                      } catch(\Illuminate\Database\QueryException $ex){ 
                                          return ['error' => 'error update user']; 
                                      }
                                  }
                          }
                              if($tip->calculated_tip_price <= $prices->bitcoin->eur )
                                  {
                                      if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L")
                                      {
                                          try { 
                                              DB::table('tips')
                                              ->where('id',   $tip->id)
                                              ->update(['winlose_flag' =>  "L"]);

                                              } catch(\Illuminate\Database\QueryException $ex)
                                              { 
                                                  return ['error' => 'error update user']; 
                                              }
                                      }
                                  }
                              
                      }

               

                }      
             
          /*Check each value in the database for direction up if there is a Win or Lose*/
        
            
           if($tip->tip_direction == "down" && Str::lower($tip->name) == "bitcoin") 
            {  
 
           
                  if(  $tip->date_end <=  $todaysdate ) 
                  {           
                          if($tip->calculated_tip_price >= $prices->bitcoin->eur)
                          
                      {
                              
                          if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="L")
                          {
                          try { 
                              DB::table('tips')
                                  ->where('id',   $tip->id)
                                  ->update(['winlose_flag' =>  "W"]);
                                  
                              
                                  } catch(\Illuminate\Database\QueryException $ex){ 
                                      return ['error' => 'error update user']; 
                                  }
                              }
                      }
                          if($tip->calculated_tip_price <= $prices->bitcoin->eur )
                          
                              {
                                  if($tip->winlose_flag !="W"  ||  $tip->winlose_flag!="W")
                                  {
                                      try { 
                                          DB::table('tips')
                                          ->where('id',   $tip->id)
                                          ->update(['winlose_flag' =>  "L"]);

                                          } catch(\Illuminate\Database\QueryException $ex)
                                          { 
                                              return ['error' => 'error update user']; 
                                          }
                                  }
                              }
                          
                  }

              

            }      

        }              
          
            
            return redirect('/adminPage')->with('success', 'Hello there, all past tips have been checked for winners and losers');
   
        }



       
    } 
  
}
