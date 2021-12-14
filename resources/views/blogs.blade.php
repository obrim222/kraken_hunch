@extends('mytemplate')

@section('title', 'Blogs')

@section('content')

@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

<<<<<<< refs/remotes/origin/tom
@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif


=======
>>>>>>> Blogs add Comments
<section class="articles">
    <div class="article__content container container--pall">
        <h2>Latest Articles</h2>

        <div class="article__grid">
            <a href="#" class="article__item">
                <div class="article__image" style="background-image: url('./images/bitcoin.jpg')"></div>
                <div class="article__text">
                    <div class="article__author">By Kasia Kolo</div>
                    <div class="article__title">
                        Bitcoin is touted as the new digital gold by Michael Saylor. Is
                        he right?
                    </div>
                    <div class="article__description">
                        Michael Saylor is a brave man. Having recently taken out a bank
                        loan to buy 7000 bitcoin....
                    </div>
                    <br>
                    <form action="{{ route('blogs') }}" method="post">
                        @csrf

<<<<<<< refs/remotes/origin/tom
                        <textarea name="blogComment" cols="15" rows="4"></textarea>

                        @error('blogComment')
=======
                        <textarea name="blog" cols="15" rows="4"></textarea>

                        @error('body')
>>>>>>> Blogs add Comments
                        <div>
                            {{ $message }}
                        </div>
                        @enderror


                        <div>
                            <button type="submit">Comment</button>
                        </div>
<<<<<<< refs/remotes/origin/tom
                    </form>
=======
>>>>>>> Blogs add Comments
                </div>
            </a>

            <a href="#" class="article__item">
                <div class="article__image" style="background-image: url('./images/ethereum.jpg')"></div>
                <div class="article__text">
                    <div class="article__author">By Tom Weniger</div>
                    <div class="article__title">Ethereum...</div>
                    <div class="article__description">Our .......</div>
                </div>
                <br>
                <form action="{{ route('blogs') }}" method="post">
                    @csrf

<<<<<<< refs/remotes/origin/tom
                    <textarea name="blogComment" cols="15" rows="4"></textarea>

                    @error('blogComment')
=======
                    <textarea name="blog" cols="15" rows="4"></textarea>

                    @error('body')
>>>>>>> Blogs add Comments
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
<<<<<<< refs/remotes/origin/tom


                    <div>
                        <button type="submit">Comment</button>
                    </div>
                </form>
            </a>

            <a href="#" class="article__item">
                <div class="article__image" style="background-image: url('./images/solana.jpg')"></div>
                <div class="article__text">
                    <div class="article__author">By Michael O Brien</div>
                    <div class="article__title">.....</div>
                    <div class="article__description">.....</div>
                </div>
                <br>
                <form action="{{ route('blogs') }}" method="post">
                    @csrf

                    <textarea name="blogComment" cols="15" rows="4"></textarea>

                    @error('blogComment')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror


                    <div>
                        <button type="submit">Comment</button>
                    </div>
                </form>
=======


                    <div>
                        <button type="submit">Comment</button>
                    </div>
            </a>

            <a href="#" class="article__item">
                <div class="article__image" style="background-image: url('./images/solana.jpg')"></div>
                <div class="article__text">
                    <div class="article__author">By Michael O Brien</div>
                    <div class="article__title">.....</div>
                    <div class="article__description">.....</div>
                </div>
                <br>
                <form action="{{ route('blogs') }}" method="post">
                    @csrf

                    <textarea name="blog" cols="15" rows="4"></textarea>

                    @error('body')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror


                    <div>
                        <button type="submit">Comment</button>
                    </div>
>>>>>>> Blogs add Comments
            </a>

            <a href="#" class="article__item">
                <div class="article__image" style="background-image: url('./images/cardano.png')"></div>
                <div class="article__text">
                    <div class="article__author">By Kasia Kolo</div>
                    <div class="article__title">.....</div>
                    <div class="article__description">.....</div>
                </div>
                <br>
                <form action="{{ route('blogs') }}" method="post">
                    @csrf

<<<<<<< refs/remotes/origin/tom
                    <textarea name="blogComment" cols="15" rows="4"></textarea>

                    @error('blogComment')
=======
                    <textarea name="blog" cols="15" rows="4"></textarea>

                    @error('body')
>>>>>>> Blogs add Comments
                    <div>
                        {{ $message }}
                    </div>
                    @enderror


                    <div>
                        <button type="submit">Comment</button>
                    </div>
<<<<<<< refs/remotes/origin/tom
                </form>
=======
>>>>>>> Blogs add Comments
            </a>
        </div>
    </div>
</section>
@endsection