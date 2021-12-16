@extends('mytemplate')

@section('title', 'Tips')
<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')




<section class="hero p-4 flex flex-jc-c">
    <div class="container">

    <h2  class="animate__animated animate__backInLeft">Tip the community </h2>
</div>  
</section>   


<div class="flex flex-jc-c">
    <div class="tip-card-container p-4">
  

        <div class="create-tip">


  
    <div class="wrapperTip" > 
        <form action="/tips" method="POST">
            @csrf

            <div class="p-4 flex flex-jc-e">
            <input type="text" name="price_at_time_of_tip" placeholder="Current price">
        </div>
        
        
        <div class="pl-2">
            <label for="coin_id"> Coin</label>
        </div>

            <div class="p-2">
         
     
                <select name="coin_id">
                <option value="1">Uniswap</option>
                        <option value="2">Cardano</option>
                        <option value="3">Chiliz</option>
                        <option value="4">Bitcoin</option>
                        <option value="5">The Sandbox</option>
                        <!-- <option value="etherum">Etherum</option> -->
                </select>
        </div>

        <div class="pl-2">
            <label for="tip_currency">Currency</label><br>
    </div>
            <div class="p-2">
    
                
                <select name="tip_currency" >
                    <option value="eur">eur</option>
                    <option value="hunch">hunch</option>
                </select>
        </div>

        <div class="pl-2">
        <label for="date">Start Date:</label>
    </div>
        <div class="p-2">
  
            <input type="date" name="date_now" placeholder="Date">
          
        </div>

        <div class="pl-2">
        <label for="date">End Date:</label>
    </div>
        <div class="p-2">
  
            <input type="date" name="date_end" placeholder="Date">
        </div>

        <div class="pl-2">
        <label for="tip_direction"> Direction</label>
    </div>
        <div class="p-2">
         
            <select name="tip_direction" id="type2">
                <option value="up">up</option>
                <option value="down">down</option>
            </select>
        </div>


        <div class="pl-2">
        <label for="tip_percentage">Tip Percentage</label><br>
    </div>
        <div class="p-2">
       
            <select name="tip_percentage" id="type">
                <option type="number">30</option>
                <option type="number">40</option>
                <option type="number">50</option>
             </select> 
        </div>

        <div class="pl-2">
        <label for="tip_reason_up">Reason behind your prediction UP</label><br>
    </div>
        <div class="p-2">
         
            <select name="reason_up">
                <option value="major_roadmap_releases_success">major_roadmap_releases_success</option>
                <option value="stock_market_up">stock_market_up</option>
                <option value="influencers_backing_the_project">influencers_backing_the_project/option>
                <option value="instinct_of_the_expert_up">instinct_of_the_expert_up</option>
                <option value="money_printing">money_printing</option>
            </select>
            </div>

            <div class="pl-2">
            <label for="tip_reason_down">Reason behind your prediction DOWN</label><br>
        </div>
            <div class="p-2">
          
                <select name="reason_down">
                    <option value="major_roadmap_releases_failure">major_roadmap_releases_failure</option>
                    <option value="stock_market_down">stock_market_down</option>
                    <option value="influencers_slating_the_project">influencers_slating_the_project</option>
                    <option value="instinct_of_the_expert_down">instinct_of_the_expert_down</option>
                    <option value="fud">FUD</option> 
                    </select> 
            </div>


            <div class="p-2">
  
                <input type="text" name="reason_description" placeholder="Other Reason">
            </div>

         
            <div class="p-4">
            
            <input type="submit" name='submitBtn' value = "Submit Your Tip"> 
        </div>

        </form>
    </div>

        <a href="/tips" class="back">See all tips</a> 
      </div> 
    </div>
</div> 
</div> 
 
@endsection