@extends('mytemplate')

@section('title', 'Tips')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<!-- added in the styling link-->
<link rel="stylesheet" href="../css/style.css">

@section('content')

<section class="hero">
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

                    <div>
                        Tipper: {{ $tip->first_name}}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Date:{{ $tip->date_now }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div>
                        Forecast Reason Up: {{ $tip->reason_up}}
                    </div>  
                    <div> 
                        Forecast Reason Down: {{ $tip->reason_down}}
                    </div>
           
                    <div>
                        Tipper comment: {{ $tip->reason_user_description }}                                 
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

                    <div>
                        Tipper: {{ $tip->first_name}}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Date:{{ $tip->date_now }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div>
                        Forecast Reason Up: {{ $tip->reason_up}}

                    </div>  
                    <div>
                        Forecast Reason Down: {{ $tip->reason_down}}
               
                    </div>  
                    <div>
                        Tipper comment: {{ $tip->reason_user_description }}                                 
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

                    <div>
                        Tipper: {{ $tip->first_name}}
                    </div>
                    <div>
                        Coin name: {{ $tip->name }} 
                    </div>
                    <div>
                        Initial tip price: {{ $tip->price_at_time_of_tip }}
                    </div>
                    <div>
                        Forecast {{ $tip->calculated_tip_price }} 
                    </div>
                    <div>
                        Date:{{ $tip->date_now }} 
                    </div>

                    <div>
                        Value: {{ $tip->tip_direction }} 
                    </div>
                    <div>
                        Forecast Reason Up: {{ $tip->reason_up}}
                    </div>  
                    <div>
                        Forecast Reason Down: {{ $tip->reason_down}}
               
                    </div>  
                    
                    <div>
                        Tipper comment: {{ $tip->reason_user_description }}                                 
                    </div>  
                </div>
   
                @endif
    
                @endforeach
    
        </div>
       
    </section>

  
@endsection