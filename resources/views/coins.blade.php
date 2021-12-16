@extends('mytemplate')

@section('title', 'Coins')

@section('content')

<section class="hero">




    <div class="container">

        <div class="hero__text container--pall">
            <h1 class="animate__animated  animate__backInRight">Coins</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non nisi non dolor pulvinar laoreet. Praesent vel ultrices leo, in iaculis turpis. Etiam ac nibh mollis, convallis orci ut, dictum eros.


            </p>

            <a href="#" class="button hero__cta">View Tips</a> <a href="#" class="button hero__cta">Give a tip</a>

        </div>
</section>


  
        <div class="flex flex-jc-c">
        <div class="flip-card-container">
            <div class="grid-container">

          
               @foreach($coins as $coin)
            
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/<?php echo $coin->symbol . ".png" ?>" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back flip-card-inner-ta">
                            
                        <div class="nomics-ticker-widget" data-name="Uniswap Protocol Token" data-base= <?php  echo '"'. $coin->symbol . '"'  ?> data-quote="EUR">  </div><script src="https://widget.nomics.com/embed.js"></script>
                        
                        <div class ="table">
                            <div class="card">
                               Category: {{$coin->coin_category}}
                           </div>
                           <div class="card">
                               Founder:  {{$coin->founder}} 
                           </div>
                           <div class="card">
                               Cofounder:  {{$coin->cofounder}} 
                               </div>
                               <div class="card">
                               TPS:  {{$coin->transactions_per_second}} 
                               </div>
                               <div class="card">
                               BlockTime:  {{$coin->blocktime}} 
                               </div>
                               <div class="card">
                               Txn Fees:  {{$coin->transactions_fees}} 
                               </div>
   
                            </div>
                        
                          <div class ="flex flex-jc-c  ">
                            <p><a href="/tips" class="button hero__cta">View Tips</a> </p> 
                            <p><a href="/create" class="button hero__cta">Give Tip</a> </p> 
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach

                
         
            </div>
        </div>

    </div>

    @endsection