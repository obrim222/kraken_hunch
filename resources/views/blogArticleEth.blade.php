@extends('mytemplate')

@section('title', 'Ethereum')

@section('content')

<div class="article__grid">
    <div class="article__item">
        <div class="article__image" style="background-image: url('./images/ethereum.jpg')"></div>
        <div class="article__text">
            <div class="article__author">By Tom Weniger</div>
            <div class="article__title">Ethereum...</div>
            <div class="article__description">Our .......</div>
        </div>
        <br>
        <p>Comments:</p>
        @foreach($blogs as $post)

        {{$post->comment}}
        @endforeach
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

    </div>
    </body>

    </html>
    @endsection