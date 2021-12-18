@extends('mytemplate')

@section('title', 'Home')


@section('content')




    <section class="hero">
        <div class="container">


        <div class="hero__text container--pall">
      
            <h1 class="animate__animated animate__backInLeft">Welcome to CryptoHunch!</h1>


             <p>
                CryptoHunch is a LEARN & EARN web app with a community focused on
                earning while learning from others! Check out our forecasting system
                that is powered by our very own expert tippers.
            </p>

            <a href="./register" class="button hero__cta">Register</a>
        </div>

    </div>
</section>


    
<section class="article__item ">
    <div class="container">
        
         <div class="hero__text container--pall">
            <h2>Leaderboard</h2>


                <div class="table">
                    @if(!empty($home2))
                    @foreach($home2 as $LBtip)
                 
                      
                        <div class="card">
                         
                            <div class="flex flex-jc-sb p-4">
                                Tipper: {{ $LBtip->firstname}}
                                {{ $LBtip->lastname}}
                                <div >
                                                          
                                 Win Count: {{ $LBtip->total }} 
                                </div>
                            </div>

    
                        </div>
       
        
                    @endforeach
                    @endif
        </div>
    </div>
 </section>

    


    <section class="feature">
        <div class="feature__content container container--pall">
            <div class="feature__intro">
                <h2>Why choose CryptoHunch?</h2>
                <p>
                    CryptoHunch provides educational summaries to investors on the pros
                    and cons of each currency. We also advise on where to buy them. Our
                    Tipsters not only provide tips but they are willing to put their
                    money where their mouth is!
                </p>
            </div>

        <div class="feature__grid">
            <div class="feature__item">
                <div class="feature__icon">
                    <img src="./images/icon-online.svg" />
                </div>
                <div class="feature__title">Multiple Payment Gateways</div>
                <div class="feature__description">
                    Topping up your account has never been easier. We accept Visa, BTC
                    and ETH.
                </div>
            </div>

            <div class="feature__item">
                <div class="feature__icon">
                    <img src="./images/icon-budgeting.svg" />
                </div>
                <div class="feature__title">Simple Account statements</div>
                <div class="feature__description">
                    See exactly what your balance is made up of with our account
                    statement screen. Report downloads are coming soon!
                </div>
            </div>

            <div class="feature__item">
                <div class="feature__icon">
                    <img src="./images/icon-onboarding.svg" />
                </div>
                <div class="feature__title">Fast Onboarding</div>
                <div class="feature__description">
                    Register and onboard within the hour with our easy KYC process.
                </div>
            </div>

            <div class="feature__item">
                <div class="feature__icon"><img src="./images/icon-api.svg" /></div>
                <div class="feature__title">Instant API feeds</div>
                <div class="feature__description">
                    CryptoHunch have access to some of the best coin data APIs in the
                    business and a team of in-house developers constantly looking to
                    improve our data sources.
                </div>
            </div>
        </div>
    </div>
</section>



<section class="articles">
    <div class="article__content container container--pall">
        <h2>Latest Articles</h2>

        <div class="article__grid">
            @if(!empty($blogs))
           @foreach($blogs as $bl) 
            <a href="blogs" class="article__item">
                <div class="article__image" style="background-image: url('./images/<?php echo $bl->name . ".png" ?>')"></div>
                <div class="article__text">
                    <div class="article__author">By <?php echo $bl->first_name . " " . $bl->last_name  ?></div>
                    <div class="article__title">
                        {{ $bl->title}}
                    </div>
                    <div class="article__description">
                        {{ $bl->blog}}
                    </div>
                </div>
            </a>
            @endforeach
            @endif

            </div>
    </div>
</section>

@endsection