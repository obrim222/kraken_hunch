@extends('mytemplate')

@section('title', 'Tips')

<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')
 
<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft">Leader Board</h2>
            <div class="table">
                <div class="card">
                <div>Number</div>       
            </div> 
            <div class="card">
                card
            </div> 
            <div class="card">
                card
            </div> 
            </div>    
        </div>
        </div>
    </div>
</section>



<section class="open_tips">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft">Open Tips</h2>
            <div class="table">

                @foreach($tipsArray as $tip)
                @if ($tip->winlose_flag  == null )

                <div class="card">
                    <h2>{{ $tip->title }}</h2>

                    <div>
                        Tipper: {{ $tip->tipper_name }}
                    </div>
                    <div>
                        Currency name: {{ $tip->coin_name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Price went up of: {{ $tip->calculated_tip_price }} % 
                     </div>
                      <div>
                         Date:{{ $tip->date }} 
                      </div>

                      <div>
                         Value: {{ $tip->tip_direction }} 
                      </div>
                      <div>
                           Reason why it went {{ $tip->tip_direction }}: 
                    {{ $tip->reason }}  
                     </div>  
                      
                     <div>
                         Tipper comment: {{ $tip->reason_user_description }}                                 
                    </div>     
            </div> 
            @endif
            @endforeach



            </div>    
        </div>

</section>

<section class="winning_tips hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft" style="color:green">Winning Tips</h2>
            <div class="table">

                @foreach($tipsArray as $tip)
  
                @if ($tip->winlose_flag  == "W" )
                <div class="card">
                        <h2>{{ $tip->title }}</h2>

                        <div>
                            Tipper: {{ $tip->tipper_name }}
                        </div>
                        <div>
                            Currency name: {{ $tip->coin_name }} 
                        </div>
                        <div>
                            Initial tip price: {{ $tip->price_at_time_of_tip }}
                        </div>
                        <div>
                            Price went up of: {{ $tip->calculated_tip_price }} % 
                        </div>
                        <div>
                            Date:{{ $tip->date }} 
                        </div>

                        <div>
                            Value: {{ $tip->tip_direction }} 
                        </div>
                        <div>
                            Reason why it went {{ $tip->tip_direction }}: 
                        {{ $tip->reason }}  
                        </div>  
                        
                        <div>
                            Tipper comment: {{ $tip->reason_user_description }}                                 
                        </div>     
                    </div> 

            @endif

            @endforeach




            </div>    
        </div>    
    </div>
   
</section>


<section class="winning_tips hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft" style="color:red">Losing Tips</h2>
            <div class="table">

                @foreach($tipsArray as $tip)

                @if ($tip->winlose_flag === "L" )
                <div class="card">
                    <h2>{{ $tip->title }}</h2>

                    <div>
                        Tipper: {{ $tip->tipper_name }}
                    </div>
                    <div>
                        Currency name: {{ $tip->coin_name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Price went up of: {{ $tip->calculated_tip_price }} % 
                     </div>
                      <div>
                         Date:{{ $tip->date }} 
                      </div>

                      <div>
                         Value: {{ $tip->tip_direction }} 
                      </div>
                      <div>
                           Reason why it went {{ $tip->tip_direction }}: 
                    {{ $tip->reason }}  
                     </div>  
                      
                     <div>
                         Tipper comment: {{ $tip->reason_user_description }}                                 
                    </div>     
            </div> 

            @endif
            @endforeach



            </div>    
        </div>    
    </div>
   
</section>

  
@endsection