@extends('mytemplate')

@section('title', 'Coins')

@section('content')

<section class="hero">




    <div class="container">

        <div class="hero__text container--pall">
            <h1>Coins</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non nisi non dolor pulvinar laoreet. Praesent vel ultrices leo, in iaculis turpis. Etiam ac nibh mollis, convallis orci ut, dictum eros.


            </p>

            <a href="#" class="button hero__cta">View Tips</a> <a href="#" class="button hero__cta">Give a tip</a>

        </div>
    </div>
</section>
<div class="flex flex-jc-c">
    <div class="flip-card-container">
        <div class="grid-container">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/uniswap-logo.png" alt="Avatar" id="coinPic" />
                    </div>
                    <div class="flip-card-back">

                        <div class="nomics-ticker-widget" data-name="Uniswap Protocol Token" data-base="UNI" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>
                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/cardano-ada-logo.png" id="coinPic" alt="Avatar" />
                    </div>
                    <div class="flip-card-back">

                        <div class="nomics-ticker-widget" data-name="Cardano" data-base="ADA" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>
                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/chiliz.jpg" alt="Avatar" id="coinPic" />
                    </div>
                    <div class="flip-card-back">
                        <div class="nomics-ticker-widget" data-name="Chiliz" data-base="CHZ" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>
                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>

                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/bitcoin.png" alt="Avatar" id="coinPic" />
                    </div>
                    <div class="flip-card-back">
                        <div class="nomics-ticker-widget" data-name="Bitcoin" data-base="BTC" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>
                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>

                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/sandbox.png" alt="Avatar" id="coinPic" />
                    </div>
                    <div class="flip-card-back">
                        <div class="nomics-ticker-widget" data-name="The Sandbox" data-base="SAND2" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>

                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>

                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/ethereum.png" alt="Avatar" id="coinPic" />
                    </div>
                    <div class="flip-card-back">
                        <div class="nomics-ticker-widget" data-name="Ethereum" data-base="ETH" data-quote="EUR"></div>
                        <script src="https://widget.nomics.com/embed.js"></script>
                        <p> Symbol:<br>
                            Category:<br>
                            Tips: <br></p>
                        <p><a href="#" class="button hero__cta">View Tips</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection