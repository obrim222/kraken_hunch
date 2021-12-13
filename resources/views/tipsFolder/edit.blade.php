@extends('mytemplate')

@section('title', 'Tips')
<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')

<div class="wrapper create-tip">
    <h1>Update Tip</h1>

        <form action="/tips" method="GET">
            @csrf

            <input type="text" name="tipper_name" placeholder="name" value ="{{ $tip->tipper_name }}"><br>
            <input type="text" name="title" placeholder="title" value="{{ $tip->title }}"><br>
            <input type="text" name="tip_text" placeholder="write your tip" value="{{ $tip->tip_text }}"><br>
            <input type="text" name="coin_name" placeholder="coin" value="{{ $tip->coin_name }}"><br>
            <input type="number" name="price_at_time_of_tip" placeholder="price_at_time_of_tip" value="{{ $tip->price_at_time_of_tip }}"><br>
            <input type="number" name="calculated_tip_price" placeholder="calculated_tip_price" value="{{ $tip->calculated_tip_price }}">
            <br><br>
            
            <label for="tip_reason">Now select reason behind your prediction</label><br>
            <select name="tip_reason" id="type1">
                    <option value="influencer talks">Influencer Talks</option>
                    <option value="intuition">Intuition</option>
                    <option value="goverment">Govermentypo</option>
                </select> 
                <br><br>

            <label for="tip_direction"> up or down?</label><br>
            <select name="tip_direction" id="type2">
                <option value="up">up</option>
                <option value="down">down</option>
            </select>

            <br><br>
            
            <input type="submit" name='submitBtn' value = "Update Tip"> 
        </form>
        <br><br>

        <a href="/tips" class="back">< Back to all coins</a> 

</div> 




   
   @endsection