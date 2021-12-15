@extends('mytemplate')

@section('title', 'Tips')

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
                <h2>Bitcoin</h2>
                <p>
                    ...............................................................................................................................................................................................
                </p>
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