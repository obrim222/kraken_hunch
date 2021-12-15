@extends('mytemplate')

@section('title', 'Tips')
<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')


        <form method="post">
        @csrf

        <input type="text" name="price_at_time_of_tip" placeholder="Current price of the coin"><br><br>
        <select name="tip_currency" >
                <option value="eur">eur</option>
                <option value="hunch">hunch</option>
        </select>


<!--  <select name="tip_direction" >
                <option value="up">up</option>
                <option value="down">down</option>
        </select>

     
      

        <select name="tip_percentage" >
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
        </select>
-->
        <input type="submit" name='submitBtn' value = "Submit Your Tip"> 
        </form>
        <br><br> 

       
   
@endsection

<!-- <input type="text" name="price_at_time_of_tip" placeholder="Current price of the coin"><br> <br> -->
