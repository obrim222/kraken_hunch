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

                <a href="#" class="button hero__cta">View Tips</a>                 <a href="#" class="button hero__cta">Give a tip</a>

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
                            <h1>Defi</h1>
                            <p>First Cryptocurrency</p>
                            <p>Currently used as a store of wealth</p>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/cardano-ada-logo.png" id="coinPic" alt="Avatar" />
                        </div>
                        <div class="flip-card-back">
                            <h1>Cryptocurrency</h1>
                            <p>A Network Coin</p>
                            <p>
                                The first smart contract network crypto where projects can be
                                built on top of
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/chiliz.jpg" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back">
                            <h1>Fantoken</h1>
                            <p>A Network Coin</p>
                            <p>
                                The first smart contract network crypto where projects can be
                                built on top of
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/bitcoin.png" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back">
                            <h1>Cryptocurrency</h1>
                            <p>A Network Coin</p>
                            <p>
                                The first smart contract network crypto where projects can be
                                built on top of
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/sandbox.png" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back">
                            <h1>Metaverse</h1>
                            <p>A Network Coin</p>
                            <p>
                                The first smart contract network crypto where projects can be
                                built on top of
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="./images/ethereum.png" alt="Avatar" id="coinPic" />
                        </div>
                        <div class="flip-card-back">
                            <h1>Cryptocurrency</h1>
                            <p>A Network Coin</p>
                            <p>
                                The first smart contract network crypto where projects can be
                                built on top of
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection