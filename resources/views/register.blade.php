@extends('mytemplate')

@section('title', 'Login')

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

<!DOCTYPE html>
<html>



<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

        @endif
        <div class="form-container">
                <form method="post">
                    @csrf
                        <label>First Name</label><br>
                        <input type="text" name="first_name" value="{{ old('first_name') }}"><br>
                        @error('first_name')
                        <div class="text-red-500 mt-2 text-sm p-6">
                            {{ $message }}
                        </div>
                        @enderror
                            <label>Last Name</label><br>
                            <input type="text" name="last_name" value="{{ old('last_name') }}"><br>
                            @error('last_name')
                            <div class="text-red-500 mt-2 text-sm p-6">
                                {{ $message }}
                            </div>
                            @enderror

                                <label>Email</label><br>
                                <input type="email" name="email" value="{{ old('email') }}"><br>
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                                    <label>Password</label><br>
                                    <input type="password" name="password"><br>
                                    @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <button type="submit" name="submit" class="button register">Register</button>
                                    </form>
                                    </div>
         @endsection
                       
                               
                             
             

    