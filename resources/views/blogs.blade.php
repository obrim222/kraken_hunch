@extends('mytemplate')

@section('title', 'Blogs')

@section('content')

@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif


<!-- animate css added for the text-->

<section class="hero">
    <div class="container">


    <div class="hero__text container--pall">
  
        <h1 class="animate__animated animate__backInRight">Latest Articles!</h1>


    </div>

</div>
</section>

<section class="">
    <div class="article__content container container--pall">

        <div class="article__grid">
            @if(!empty($blogs))
           @foreach($blogs as $bl) 
            <a href="blogsdetail" class="article__item">
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