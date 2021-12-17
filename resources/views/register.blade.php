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


<form method="post">

    @csrf
    <input type="text" name="first_name" placeholder="Firstname" value="{{ old('first_name') }}"><br>
    @error('first_name')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <input type="text" name="last_name" placeholder="Lastname" value="{{ old('last_name') }}"><br>
    @error('last_name')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>
    @error('email')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>
    @enderror
    <input type="password" name="password" placeholder="Password"><br>
    @error('password')
    <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
    </div>
    @enderror


    </div>
    </div>
    </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

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
                       
                               
                             
             


    <section class="hero">
        <div class="container">
            <div class="hero__text container--pall">
                <h1>Register</h1>


            </div>
        </div>
    </section>



    <form method="post">

        @csrf
        <input type="text" name="first_name" placeholder="Firstname" value="{{ old('first_name') }}"><br>
        @error('first_name')
        <div class="text-red-500 mt-2 text-sm p-6">
            {{ $message }}
        </div>
        @enderror
        <input type="text" name="last_name" placeholder="Lastname" value="{{ old('last_name') }}"><br>
        @error('last_name')
        <div class="text-red-500 mt-2 text-sm p-6">
            {{ $message }}
        </div>
        @enderror
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"><br>
        @error('email')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror
        <input type="password" name="password" placeholder="Password"><br>
        @error('password')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror

        <input type="submit" name="submit" value="Register">
    </form>

    </body>

    </html>