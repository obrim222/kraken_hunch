@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif


@section('content')



@extends('mytemplate')

@section('title', 'Admin')
<!-- added jQuery link-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


@section('content')

<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
    
   
   
            <h2> Tips Admin </h2> 
     
        </div>

    </div>
</section>
<td>
    <div class="container ">
    <form action="/runCheck" method="GET" style="display: inline" class="">
       @csrf
       @method('POST')
       <div class="m-4">
           <h3>Check for winners and losers in the database</h3>
         <button type="submit" class="btn btn-sm btn-success">
            <i class="fa fa-check"></i>
         </button>
       </div>
      </form>                              
   </td>
</div>

<section>
<div class="container "> 
    <div class="m-4">
    <h3>Deactivate tips in the database</h3>
</div>
@if(!empty($tips))

@foreach($tips as $tip) 
@if($tip->inactive == 0)

<div class="container ">
     <div class="ml-4" > 
        <textarea disabled  id="tipid"  name="tipid" cols="140" rows="4"> {{ " Tip#:"  . $tip->id . " User: " . $tip->first_name  . " " . $tip->last_name . " Direction: " .  $tip->tip_direction  . " Date end: " .  $tip->date_end . " Reason: " .  $tip->reason_up .   " " .  $tip->reason_down . " Winlose flag: " .  $tip->winlose_flag . " Forecast Price: " .  $tip->calculated_tip_price  }}</textarea> 
      
                
            <form action="{{url('deactivateTip') }} "  method="POST">
                @csrf
           
                <textarea class="displaynone " id="tipid"  name="tipid" cols="140" rows="4"> {{$tip->id }}</textarea> 
                @error('tipid')

                <div class="m-3 ">
                   
                    {{$tip->id}}
                </div>
                @enderror  
               <button> <?php echo " Deactivate tip " . $tip->id ?></button>
       
          </form>
        </div>

    </div>


@endif  
    @endforeach
@endif  

</section>

<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
      
       
            <h2> User Admin </h2> 
     
        </div>

    </div>
</section>


<section>

    <div class="container "> 
        <div class="m-4">
        <h3>Deactivate users in the database</h3>
    </div>
</div>
    @if(!empty($users))

    @foreach($users as $user) 
    @if($user->inactive == 0)
  
    <div class="container ">
         <div class="ml-4" > 
            <textarea   id="userid"  name="userid" cols="140" rows="4"> {{ " user "  . $user->id . " " .  $user->first_name  . " "  . $user->last_name  }}</textarea> 
          
                    
            <form action=" {{ url('deactivateUser') }} "  method="POST">
                    @csrf
               
                    <textarea class="displaynone " id="userid"  name="userid" cols="140" rows="4"> {{$user->id}}</textarea> 
                    @error('userid')

                    <div class="m-3 ">
                       
                        {{$user->id}}
                    </div>
                    @enderror  
                   <button> <?php echo " Deactivate user " . $user->id ?></button>
           
              </form>
            </div>

        </div>

    }
    @endif  
        @endforeach
    @endif  
</section>

<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
    

            <h2> Blog Admin </h2> 
        </h1>
        </div>

    </div>
</section>

<section>
    <div class="container "> 
        <div class="m-4">
        <h3>Deactivate blogs in the database</h3>
    </div>
</div>

    @if(!empty($blogs))
    @foreach($blogs as $blog) 
    @if($blog->inactive == 0)
    <div class="container "> 
          
            
         <div class="m-4" > 
            <textarea   id="id"  name="id" cols="140" rows="4"> {{ " Blog "  . $blog->id .  " " .  $blog->title . "by " .  $blog->first_name  . " "  . $blog->last_name  }}</textarea> 
       
            <form action=" {{ url('deactivateBlog') }} "  method="POST">
                @csrf
           
                <textarea class="displaynone " id="blogid"  name="blogid" cols="140" rows="4"> {{$blog->id}}</textarea> 
                @error('blogid')

                <div class="m-3 ">
                   
                    {{$blog->id}}
                </div>
                @enderror  
               <button> <?php echo " Deactivate blog " . $blog->id ?></button>
       
          </form>
            </div>

        </div>
        @endif  
        @endforeach
    @endif  
</section>


<section>
    <div class="container "> 
        <div class="m-4">
        <h3>Add a blog</h3>
        </div>
</div>
<div class="container "> 
    <form action=" {{ url('addBlog') }} "  method="POST">
                  @csrf
              
                  <input type="text" name="blog" placeholder="blog" value="{{ old('blog') }}"> <br>
                  @error('blog')
                  <div>
                      {{ $message }}
                  </div>
                  @enderror

                  <input type="text" name="coin_id" placeholder="Coin Id" value="{{ old('coin_id') }}"> <br>
                  @error('coin_id')
                  <div>
                      {{ $coin_id }}
                  </div>
                  @enderror
                  <button type="submit" name="submit" value="Submit">Add Blog</button>
    
              </form>
          
             
            </div>

</section>






@endsection
