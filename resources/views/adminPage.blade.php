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
    
   
            <h1>
             Admin Page    
            </h1>
            <h3> User Administration </h3> 
     
        </div>

    </div>
</section>


<section>
    @if(!empty($users))
    @foreach($users as $user) 
    
     <div class="container ">
          
        
  
    
         <div class="ml-4" > 
 
                <form action="/adminPage"  method="POST">
                    @csrf
               
                    <textarea   id="id"  name="id" cols="140" rows="4"> {{ " User "  . $user->id . " " .  $user->first_name  . " "  . $user->last_name  }}</textarea> 
                    
                 
                    <button> <?php echo " Deactivate user " . $user->id ?></button>
                       
                    @error('id')    
                    @enderror
   
              </form>
            </div>

        </div>
        @endforeach
    @endif  
</section>

<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
    
   
            <h1>
             Admin Page    
            </h1>
            <h3> Blog Administration </h3> 
        </h1>
        </div>

    </div>
</section>

<section>
    @if(!empty($blogs))
    @foreach($blogs as $blog) 
    
     <div class="container ">
          
        
  
    
         <div class="ml-4" > 
 
                <form action="/adminPage"  method="POST">
                    @csrf
               
                    <textarea   id="id"  name="id" cols="140" rows="4"> {{ " Blog " .  $blog->id . " titled "  . $blog->title  }}</textarea> 
                    
                 
                    <button> <?php echo " Delete blog " . $blog->id ?></button>
                       
                    @error('id')    
                    @enderror
   
              </form>
            </div>

        </div>
        @endforeach
    @endif  
</section>





@endsection
