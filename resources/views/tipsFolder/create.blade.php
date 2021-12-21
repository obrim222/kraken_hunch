
@extends('mytemplate')

@section('title', 'Tips')

<!-- added jQuery link-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')


<!-- animate css added for the text-->

<section class="hero">
    <div class="container">


    <div class="hero__text container--pall">
  
        <h1 class="animate__animated animate__backInLeft">Tip the community!</h1>
    </div>

</div>
</section>


<div class="flex flex-jc-c">
    <div class="tip-card-container p-4">
        <div class="create-tip">
            <div class="wrapperTip">
                <form action="/tips" method="POST">
                    @csrf
                    <div class="calc">

                        <div class="p-1">
                            <label for="coin_id"> Coin</label>
                        </div>

                        <div class="p-1">


                            <select name="coin_id" id="cID" value="{{old('coin_id')}}" onchange="callfunction()">
                                <option value="">Select</option>
                                <option value="1">Uniswap</option>
                                <option value="2">Cardano</option>
                                <option value="3">Chiliz</option>
                                <option value="4">Bitcoin</option>
                                <option value="5">Ethereum</option>
                            
                                <!-- <option value="etherum">Etherum</option> -->
                            </select>
                            @error('coin_id')
                            {{$message}}
                            @enderror
                        </div>


                        <div class="p-1 flex flex-jc-e mr-5">
                            <label for="price_at_time_of_tip"> Current Price:</label>
                        </div>

                        <div class="mr-5 flex flex-jc-e ">

                            <input type="text" name="price_at_time_of_tip" placeholder="Calculated price" id="cp" readonly="readonly">
                        </div>

                        <div class="p-1 flex flex-jc-e mr-4ish">
                            <label for="calculated_tip_price"> Forecast Price:</label>
                        </div>


                        <div class="mr-5 flex flex-jc-e">
                            <input type="text" name="calculated_tip_price" placeholder="Forcasted price" id="fp" readonly="readonly">

                        </div>


                        <div class="p-1">
                            <label for="tip_direction"> Direction</label>
                        </div>
                        <div class="p-1">
                            <select name="tip_direction" id="type2"  value="{{old('tip_direction')}}"  onchange="callfunction()">
                                <option value="">Select</option>
                                <option value="up">up</option>
                                <option value="down">down</option>

                
                            </select>
                            @error('tip_direction')
                            {{$message}}
                            @enderror
                        </div>
                        <br>


                        <div class="p-1">
                            <label for="tip_percentage">Tip Percentage</label><br>
                        </div>
                        <div class="p-1">
                            <select name="tip_percentage" id="type" value="{{old('tip_percentage')}}" onchange="callfunction()">
                                <option value="">Select</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                            @error('tip_percentage')
                            {{$message}}
                            @enderror
                        </div>

                        <br>


                    <div class="p-1">
                        <label for="tip_currency">Currency</label><br>
                    </div>
                    <div class="p-1">


                        <select name="tip_currency" value="{{old('tip_currency')}}">
                            <option value="">Select</option>
                            <option value="eur">eur</option>
                            <option value="hunch">hunch</option>
                        </select>
                        @error('tip_currency')
                        {{$message}}
                        @enderror
                    </div>
                    <br>

                    <div class="p-1">
                        <label for="date">Start Date:</label>
                    </div>
                    <div class="p-1">

                    <input type="date" name="date_now" name = "{{$date_now ?? ''}}valid_to" type="text" class = "form-control datepicker valid_to" placeholder = "Valid To" data-date-start-date="d" value = "{{date('Y-m-d')}}"> 

                    </div>
                    <br>

                    <div class="p-1">
                        <label for="date">End Date:</label>
                        @error('date_end')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="p-1">

                        <input type="date" name="date_end" value="{{old('date_end')}}" placeholder="Date">
                    </div>
                    <br>


                    <div class="p-1">
                        <label for="tip_reason_up" id="resuplabel">Reason behind your prediction UP </label><br>
                    </div>
                    <div class="p-1">

                        <select name="reason_up" id="resup" value="{{old('reason_up')}}">
                            <option value="">Select</option>
                            <option value="major_roadmap_releases_success">major_roadmap_releases_success</option>
                            <option value="stock_market_up">stock_market_up</option>
                            <option value="influencers_backing_the_project">influencers_backing_the_project/option>
                            <option value="instinct_of_the_expert_up">instinct_of_the_expert_up</option>
                            <option value="money_printing">money_printing</option>
                            <option value="other">other</option>
                        </select>
                        @error('reason_up')
                        {{$message}}
                        @enderror
                    </div>
                    <br>

                    <div class="p-1">
                        <label for="tip_reason_down" id="resdownlabel" >Reason behind your prediction DOWN</label><br>
                    </div>
                    <div class="p-1">

                        <select name="reason_down" id="resdown"value="{{old('reason_down')}}">
                            <option value="">Select</option>
                            <option value="major_roadmap_releases_failure">major_roadmap_releases_failure</option>
                            <option value="stock_market_down">stock_market_down</option>
                            <option value="influencers_slating_the_project">influencers_slating_the_project</option>
                            <option value="instinct_of_the_expert_down">instinct_of_the_expert_down</option>
                            <option value="fud">FUD</option>
                            <option value="other">other</option>
                        </select>
                        @error('reason_down')
                        {{$message}}
                        @enderror
                    </div>
                    <br>


                    <div class="p-4">
                       
                        <input href="/tips" type="submit" class=" button hero__cta" name='submitBtn' value="Submit Your Tip">
                    </div>

               
                </form>

            </div>
      
           <!-- <a href="/tips" class="button hero__cta">See all tips</a> -->

        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    
     function callfunction() {
          myFunction();
          calculation();
          //showReasons(); 
          // show reason and
          
      }
    //fetch the currency that has been selected on screen
    function myFunction() {
        selected_coin = $('#cID option:selected').text();
        const endpoint = "https://api.coingecko.com/api/v3/simple/price?ids=";
        console.log(selected_coin);
        var endpoint_options = endpoint + selected_coin.toLowerCase() + "&vs_currencies=eur";
        const markets = endpoint_options;
        $.get(markets, function(data) {
            for (var key in data) {
                if (Object.hasOwnProperty.call(data, key)) {
                    var eur = data[key].eur;
                    $("#cp").val(eur);
                }
            }
            calculation();
        });
    };
    
    //Calculate the forecasted minimu price
    function calculation() {
        
        var cp = $('#cp').val();
        var fp = $('#type').val();
        var direction = $('#type2').val();
        console.log(direction);
        if (direction =='up'){
        $('#fp').val((parseInt(cp) * (parseFloat(fp) / 100)) + parseInt(cp));
        $('#resdown').hide();
        $('#resdownlabel').hide();
        $('#resup').show();
        $('#resuplabel').show();

        
    }   
      else {
        $('#fp').val(parseInt(cp) * ((100 - parseFloat(fp))   / 100 ));
            $('#resup').hide();
            $('#resuplabel').hide();
            $('#resdown').show();
            $('#resdownlabel').show();

   }
}
 
</script>
@endsection