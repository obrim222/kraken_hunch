@extends('mytemplate')

@section('title', 'Tips')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul style="color:green">
         <li >{!! \Session::get('success') !!}</li> 
        </ul>
    </div>
@endif

<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')

<section class="hero">
    <div class="container">


    <div class="hero__text container--pall">
  
        <h1 class="animate__animated animate__backInLeft">Tips Page!</h1>


         <p>
            See the leaderboard below with the amount of winning tips per member aswell as the open, winning and losing tips. 
        </p>

        
    </div>

</div>
</section>

<section class="">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft">Leader Board</h2>
            <div class="table">
   
                            @if(!empty($lb))
                                    @foreach($lb as $LBtip)
                                 
                                      
                                        <div class="card">
                                         
                                            <div class="flex flex-jc-sb p-4">
                                                Tipper: {{ $LBtip->firstname}}
                                                {{ $LBtip->lastname}}
                                                <div >
                                                                          
                                                 Win Count: {{ $LBtip->total }} 
                                                </div>
                                            </div>
                
                    
                                        </div>
                       
                        
                                    @endforeach
                                    @endif
                        </div>
      </div>
</section>


<!-- foreign key added and open win lose tips added-->
<section class="open_tips">
    <div class="container">
        
        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft">Open Tips</h2>
            <div class="table">

                @foreach($tipsArray as $tip)
                @if ($tip->winlose_flag  == null )

                <div class="card">
                    <h2>{{ $tip->title }}</h2>

                    <div class="bold">
                        Tipper: {{ $tip->first_name . " "  . $tip->last_name }}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast: {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Current Date: {{ $tip->date_now }} 
                    </div>

                    <div>
                        End Date: {{ $tip->date_end }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div class="padding-bottom">
                        Forecast Reason: {{ $tip->reason_up . $tip->reason_down}}
                    </div>  
             
                </div> 
     
   
            @endif

            @endforeach

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

                  
                    <div class="bold">
                        Tipper: {{ $tip->first_name . " "  . $tip->last_name }}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast: {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Current Date: {{ $tip->date_now }} 
                    </div>

                    <div>
                        End Date: {{ $tip->date_end }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div class="padding-bottom">
                        Forecast Reason: {{ $tip->reason_up . $tip->reason_down}}
                    </div>  
      
             
            </div>
   
            @endif

            @endforeach

    </div>
   
</section>


<section class="winning_tips hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h2  class="animate__animated animate__backInLeft" style="color:red">Losing Tips</h2>
            <div class="table">

                @foreach($tipsArray as $tip)

                @if ($tip->winlose_flag == "L" )
                <div class="card">
                    <h2>{{ $tip->title }}</h2>

                  
                    <div class="bold">
                        Tipper: {{ $tip->first_name}}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast: {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Current Date: {{ $tip->date_now }} 
                    </div>

                    <div>
                        End Date: {{ $tip->date_end }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div class="padding-bottom">
                        Forecast Reason: {{ $tip->reason_up . $tip->reason_down}}
                    </div>  
                    
    
                </div>
   
                @endif
    
                @endforeach
    
        </div>
       
    </section>

  
@endsection