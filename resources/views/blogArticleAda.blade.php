@extends('mytemplate')

@section('title', 'Cardano')

@section('content')
<div class="article__grid">
    <div class="article__item">
        <div class="article__image" style="background-image: url('./images/cardano.png')"></div>
        <div class="article__text">
            <div class="article__author">By Kasia Kolo</div>
            <div class="article__title">.....</div>
            <div class="article__description">.....</div>
        </div>
        <br>
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
</div>
</section>
@endsection