@extends('mytemplate')

@section('title', 'Tips')
<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')

<div class="wrapper create-tip">
    <h1>Share your secrets & tip the community</h1>

        <form action="/tips" method="POST">
            @csrf

            
            

            <label for="coin_name"> coin </label><br>
            <select name="coin_name" id="type2">
                <option value="coin1">Uniswap</option>
                <option value="coin2">Cardano</option>
                <option value="coin2">Chiliz</option>
                <option value="coin2">Bitcoin</option>
                <option value="coin2">The Sandbox</option>
                <option value="coin2">Etherum</option>
            </select>
            <br><br>



            <label for="tip_direction">Currency</label><br>
            <select name="tip_direction" id="type2">
                <option value="currency1">eur</option>
                <option value="currency2">hunch</option>
            </select>
            <br><br>

            <input type="date" name="date" placeholder="Date">Time Frame <br><br>
            <input type="date" name="date" placeholder="Date">Time Frame <br><br>
            <input type="text" name="price_at_time_of_tip" placeholder="Current price of the coin"><br> <br>
            


            <label for="tip_direction"> Price direction up or down?</label><br>
            <select name="tip_direction" id="type2">
                <option value="up">up</option>
                <option value="down">down</option>
            </select>
            <br><br>
            
            <label for="tip_reason_up">Reason behind your prediction UP</label><br>
            <select name="tip_reason" id="type1">
                    <option value="major roadmap releases success">Major roadmap releases success</option>
                    <option value="stock market up">Stock market up</option>
                    <option value="influencers backing the project">Influencers backing the project</option>
                    <option value="money printing">Money printing</option>
                    <option value="instinct of the expert up">Instinct of the expert up"</option>
                </select> 
                <br><br>


            <label for="tip_reason_down">Reason behind your prediction DOWN</label><br>
            <select name="tip_reason" id="type2">
                    <option value="major roadmap releases failure">Major roadmap releases failure</option>
                    <option value="stock market down">Stock market down</option>
                    <option value="influencers slating the project">Influencers slating the project</option>
                    <option value="instinct of the expert down">Instinct of the expert down</option>
                    <option value="FUD">FUD</option>
                </select> 
                <br><br>


            <br><br>
            
            <input type="submit" name='submitBtn' value = "Submit Your Tip"> 
        </form>
        <br><br>

        <a href="/tips" class="back">< Back to all coins</a> 

</div> 




   
   @endsection