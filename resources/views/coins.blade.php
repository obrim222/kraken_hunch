
@extends('mytemplate')

@section('title', 'Coins')

@section('content')

<section class="hero">





    <div class="container">

        <div class="hero__text container--pall">
            <h1 class="animate__animated  animate__backInRight">Coins</h1>
            <p>
               Hover over the coins below to see coin info and view tips or give a tip.
            </p>

            @auth
            <a href="#" class="button hero__cta">View Tips</a>
            <a href="#" class="button hero__cta">Give a tip</a>
            @else
            <a href="./register" class="button hero__cta">Register</a>
            @endauth
        </div>
</section>


  
        <div class="flex flex-jc-c">
        <div class="flip-card-container">
            <div class="grid-container">

            @if(!empty($coins))
           
               @foreach($coins as $coin)
     
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/<?php echo $coin->symbol . ".png" ?>" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back flip-card-inner-ta">
                            
                        <div class="nomics-ticker-widget" data-name="Uniswap Protocol Token" data-base= <?php  echo '"'. $coin->symbol . '"'  ?> data-quote="EUR">  </div><script src="https://widget.nomics.com/embed.js"></script>
                        
                        <div class ="table ">
                            
                            <div class="card ">
                              
                                <div class ="">   Category : {{ $coin->coin_category}} </div>  

                           </div>
                           <div class="card">
                               Founder :            {{  $coin->founder}} 
                           </div>
                           <div class="card">
                               Algorithm :          {{ $coin->algorithm}} 
                               </div>
                               <div class="card">
                               Txns Per Second :     {{ $coin->transactions_per_second}} tps
                               </div>
                               <div class="card">
                               BlockTime :          {{$coin->blocktime}} seconds
                               </div>
                               <div class="card">
                               Txn Fees :           {{$coin->transactions_fees}} euros
                               </div>
   
                            </div>
                        
                          <div class ="flex flex-jc-c  ">

                            @auth
                            <p><a href="#" class="button hero__cta">View Tips</a> </p> 
                                <p> <a href="#" class="button hero__cta">Give a tip</a> </p> 
                            @else
                            <p><a href="./register" class="button hero__cta">Register</a> </p> 
                            @endauth
                              </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                
         
            </div>
        </div>

    </div>

    @endsection