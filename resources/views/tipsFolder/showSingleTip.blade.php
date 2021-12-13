@extends('mytemplate')

@section('title', 'Tips')

@section('content')

<div class="wrapper tip-details">

<h1> Ennum doesnt work with this loop Reason why {{ $tip->coin_name }} went {{ $tip->tip_direction }} was the following: <br> {{$tip->reason }} </h1>

<h2>{{ $tip->title }}</h2>
                Tipper: <br> {{ $tip->tipper_name }} <br><br>

                Currency name: <br> {{ $tip->coin_name }} <br><br>

                Initial tip price: <br> {{ $tip->price_at_time_of_tip }} <br><br>

                Price went up of: <br> {{ $tip->calculated_tip_price }} % <br><br>

                Date: <br> {{ $tip->date }} <br><br>

                Value: <br> {{ $tip->tip_direction }} <br><br>

                Reason why it went {{ $tip->tip_direction }}: <br>
                    {{ $tip->reason }}  

                Tipper comment: <br> {{ $tip->reason_user_description }} <br><br>
                    
                    
                </div>

<a href="/tips" class="back">< Back to all coins</a>


<form action="/tips/{{$tip->id }}" method="POST">
   @csrf
   @method('DELETE')
   <button>Delete record</button>


</form>






</div>
 

    
   
   @endsection