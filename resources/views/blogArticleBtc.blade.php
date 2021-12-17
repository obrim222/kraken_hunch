@extends('mytemplate')

@section('title', 'Bitcoin')

@section('content')
<div class="article__grid">
    <div class="article__item">
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
    </div>



    </body>

    </html>

    @endsection