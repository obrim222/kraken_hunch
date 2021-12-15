@extends('mytemplate')

@section('title', 'Tips')
<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')

<div class="wrapper create-tip">
    <h1>Tip the community</h1>

    <form method="POST">
            @csrf



        <label for="coin_id"> coin</label><br>
        <select name="coin_id">
        <option value="1">Uniswap</option>
                <option value="2">Cardano</option>
                <option value="3">Chiliz</option>
                <option value="4">Bitcoin</option>
                <option value="5">The Sandbox</option>
                <!-- <option value="etherum">Etherum</option> -->
        </select>
        <br><br>
        
        <label for="tip_currency">Currency</label><br>
        <select name="tip_currency" >
            <option value="eur">eur</option>
            <option value="hunch">hunch</option>
        </select>
            
        <br> <br>

        <input type="date" name="date_now" placeholder="Date">Tip prediction /DATE FROM <br><br>
        <input type="date" name="date_end" placeholder="Date">Tip prediction /DATE TO <br><br>

        <input type="text" name="price_at_time_of_tip" placeholder="Current price of the coin">Price at the time of the tip<br><br>


        <label for="tip_percentage"> tip percentage</label><br>
            <select name="tip_percentage">
                <option type="number">30</option>
                <option type="number">40</option>
                <option type="number">50</option>
            </select>
            <br><br>



        <label for="tip_direction"> Tip direction</label><br>
            <select name="tip_direction">
                <option value="up">up</option>
                <option value="down">down</option>
            </select>
            <br><br>

        
            <label for="reason_up"> reason_up</label><br>
            <select name="reason_up">
                <option value="major_roadmap_releases_success">major_roadmap_releases_success</option>
                <option value="stock_market_up">stock_market_up</option>
                <option value="influencers_backing_the_project">influencers_backing_the_project/option>
                <option value="instinct_of_the_expert_up">instinct_of_the_expert_up</option>
                <option value="money_printing">money_printing</option>
            </select>
            <br><br>


            <label for="reason_down"> reason_down</label><br>
            <select name="reason_down">
                <option value="major_roadmap_releases_failure">major_roadmap_releases_failure</option>
                <option value="stock_market_down">stock_market_down</option>
                <option value="influencers_slating_the_project">influencers_slating_the_project</option>
                <option value="instinct_of_the_expert_down">instinct_of_the_expert_down</option>
                <option value="fud">FUD</option> <br> <br>
                </select>   <br> <br>

                <input type="text" name="reason_description" placeholder="reason_description">Reason_other<br><br>




            
            
            <br><br>


    
          

           



<!-- 

    <select name="tip_percentage">
            <option value="tip_percentage_30"> 30% </option>
            <option value="tip_percentage_40"> 40% </option>
            <option value="tip_percentage_50"> 50% </option>
             
                </select> 
                <br><br>

  <label for="coin_name"> coin </label><br>
            <select name="coin_name" id="">
                <option value="currency_uniswap">Uniswap</option>
                <option value="currency_cardano">Cardano</option>
                <option value="currency_chiliz">Chiliz</option>
                <option value="currency_bitcoin">Bitcoin</option>
                <option value="currency_the_sandbox">The Sandbox</option>
                <option value="currency_etherum">Etherum</option>
            </select>
            <br><br>



<option value="tip_currency_eur">eur</option>
            <option value="tip_currency_hunch">hunch</option>


  <label for="tip_currency">Currency</label><br>
            <select name="tip_currency" id="">
                <option value="tip_currency_eur">eur</option>
                <option value="tip_currency_hunch">hunch</option>
            </select>
            <br><br>



          
            

           
           



            <input type="date" name="date_now" placeholder="Date">Tip prediction /DATE FROM <br>
            <input type="date" name="date_end" placeholder="Date">Tip prediction /DATE TO <br><br>
            <input type="text" name="price_at_time_of_tip" placeholder="Current price of the coin"><br> <br>
            


            <label for="tip_percentage">Tip Percentage</label><br>
            <select name="tip_percentage" id="type">
                    <option value="tip_percentage_30"> 30% </option>
                    <option value="tip_percentage_40"> 40% </option>
                    <option value="tip_percentage_50"> 50% </option>
             
                </select> 
                <br><br>

            
            
            <label for="tip_reason_up">Reason behind your prediction UP</label><br>
            <select name="tip_reason_up" id="type1">
                    <option value="reason_up_major_roadmap_releases_success">Major roadmap releases success</option>
                    <option value="reason_up_stock_market">Stock market up</option>
                    <option value="reason_up_influencers_backing_the_project">Influencers backing the project</option>
                    <option value="reason_up_money_printing">Money printing</option>
                    <option value="reason_up_instinct_of_the_expert">Instinct of the expert up"</option>
                </select> 
                <br><br>



 

            <label for="tip_reason_down">Reason behind your prediction DOWN</label><br>
            <select name="tip_reason_down" id="type2">
                    <option value="reason_down_major_roadmap_releases_success">Major roadmap releases failure</option>
                    <option value="reason_down_stock_market">Stock market down</option>
                    <option value="reason_down_influencers_slating_the_project">Influencers slating the project</option>
                    <option value="reason_down_instinct_of_the_expert">Instinct of the expert down</option>
                    <option value="reason_down_frud">FUD</option>
                </select> 
                <br><br>


            <br><br>

            
       -->     
            <input type="submit" name='submitBtn' value = "Submit Your Tip"> 
        </form>
        <br><br>

        <a href="/tips" class="back">< Back to all coins</a> 

</div> 




   
   @endsection