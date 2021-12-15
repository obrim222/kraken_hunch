@extends('mytemplate')

@section('title', 'Tips')

<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')
 
<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h1>Leaderboard</h1>
            <div class="table">
                <div class="card">
                <div>Number</div>       
            </div> 
            <div class="card">
                card
            </div> 
            <div class="card">
                card
            </div> 
            </div>    
        </div>
        </div>
    </div>
</section>


    <div class="flex flex-jc-c">
        <div class="tip-card-container">
            <div class="tip-card">
                <h2>Tips Summary </h2>
            </div>
            <p></p>
            <div>
                @foreach($tipsArray as $tip)
                <div>

                <h2>{{ $tip->title }}</h2>
                Tipper: <br> {{ $tip->tipper_name }} <br><br>

                Currency name: <br> {{ $tip->coin_name }} <br><br>

                Initial tip price: <br> {{ $tip->price_at_time_of_tip }} <br><br>

                Price went up of: <br> {{ $tip->calculated_tip_price }} % <br><br>

                Date: <br> {{ $tip->date }} <br><br>

                Value: <br> {{ $tip->tip_direction }} <br><br>

                Reason why it went {{ $tip->tip_direction }}: <br>
                    {{ $tip->reason }}  

                Tipper comment: <br> {{ $tip->reason_user_description }} <br><br>
                    
                    
                </div>
                @endforeach

                <a href="/home" class="back">< Back to main page</a> 


        


            </div>

            <div class="tip-card">
                <h2>Ethereum</h2>
                <p>
                    ..............................................................................................................................................................................................
                </p>
                
            </div>

            <div class="tip-card">
                <h2>Solana</h2>
                <p>
                    ...............................................................................................................................................................................................
                </p>
            </div>
        </div>
    </div>
   
   @endsection