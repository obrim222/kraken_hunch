@extends('mytemplate')

@section('title', 'Login')

@section('content')



@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif

<section class="hero">
    <div class="container">


    <div class="hero__text container--pall">
  
        <h1 class="animate__animated animate__backInLeft">Login Page</h1>


         <p>
          
        </p>
    </div>

</div>
</section>


<div class="containerSmallContent flex flex-jc-c ">
    <div class="form-container">
        <form method="post">
            @csrf

              <p>Enter your email:</p>
              <input type="email" name="email" placeholder="E-mail">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm p-4">
                        {{ $message }}
                    </div>
                    @enderror

                       
                    <p>Enter your password:</p>
                     <input type="password" name="password" placeholder="Password">

                            @error('password')
                            <div class="text-red-500 mt-2 text-sm p-4">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="p-4 ">
                                <button type="submit" name="submit" class="button register">Login</button>
                            </div>
    </div>







</div>

</form>


</div>




@endsection