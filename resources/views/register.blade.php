@extends('mytemplate')

@section('title', 'Register')

@section('content')


@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif


@if (Auth::check()) {
return redirect()->route('login');
}

@endif

<section class="hero">
    <div class="container">
        <div class="hero__text container--pall">
            <h1  class="animate__animated animate__backInRight">Register</h1>
        </div>
    </div>
</section>

<div class="containerSmallContent flex flex-jc-c ">
    <div class="form-container m-4">

<form method="post">

    @csrf
    <input class="m-2" type="text" name="first_name" placeholder="Firstname" value="{{ old('first_name') }}"><br>
    @error('first_name')
    <div class="text-red-500 mt-2 text-sm p-6 m-">
        {{ $message }}
    </div>
    @enderror
    <input class="m-2" type="text" name="last_name" placeholder="Lastname" value="{{ old('last_name') }}"><br>
    @error('last_name')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <input class="m-2" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>
    @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>
    @enderror
    <input class="m-2" type="password" name="password" placeholder="Password"><br>
    @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>

    @enderror

    <input class="m-2"type="submit" name="submit" value="Register">


</form>
</div>
</div>
@endsection