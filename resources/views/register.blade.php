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
            <h1>Register</h1>
        </div>
    </div>
</section>

<form id="contactForm" method="post">

    @csrf
    <input type="text" name="first_name" id="first_name" placeholder="Firstname" value="{{ old('first_name') }}"><br>
    @error('first_name')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <input type="text" name="last_name" id="last_name" placeholder="Lastname" value="{{ old('last_name') }}"><br>
    @error('last_name')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}"><br>
    @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>
    @enderror
    <input type="password" name="password" id="password" placeholder="Password"><br>
    @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>

    @enderror
    <input type="submit" name="submit" value="Register">


</form>

@endsection