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
    <div class="container  ">

        <div class="hero__text flex flex-jc-c ">
            <h3>Login</h3>


        </div>
    </div>
</section>

<div class="containerSmallContent flex flex-jc-c ">

<div class="form-container">
    <form method="post">
        @csrf
        <label>Email</label><br>
                <form method="post">
    @csrf

        <input type="email" name="email"><br>
        @error('email')
        <div class="text-red-500 mt-2 text-sm p-6">
            {{ $message }}
        </div>
        @enderror
        <label>Password</label><br>

    <p>Enter your email:</p>
 
    <input type="email" name="email" ><br>
    @error('email')
    <div class="text-red-500 mt-2 text-sm p-4">
        {{ $message }}
    </div>
    @enderror

        <input type="password" name="password"><br>
        @error('password')
        <div class="text-red-500 mt-2 text-sm p-6">
            {{ $message }}
        </div>
        @enderror
        <button type="submit" name="submit" class="button register">Login</button>

        <p>Enter your password:</p>

    <input type="password" name="password" ><br>
    @error('password')
    <div class="text-red-500 mt-2 text-sm p-4">
        {{ $message }}
    </div>
    @enderror
    <div class ="p-4 "> 
    <button type="submit" name="submit" class="button register">Login</button>
    </div>
</div>

</form>


    </form>
</div>



@endsection