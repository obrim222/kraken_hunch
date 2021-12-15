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
<<<<<<< refs/remotes/origin/tom
{{--Test--}}

<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
=======
>>>>>>> footer, forms

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
                       
                               
                             
             

<<<<<<< refs/remotes/origin/tom
            </div>
        </div>
    </div>
<<<<<<< refs/remotes/origin/tom

</body>

</html>
=======
=======
>>>>>>> RegisterPageCorrection

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<section class="hero">
    <div class="container">

        <div class="hero__text container--pall">
            <h1>Register</h1>


        </div>
    </div>
</section>

<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Create a CryptoHunch account </div>
            <div class="card-body">
                <form id="add-blog-post-form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}"><br>
                        @error('first_name')
                        <div class="text-red-500 mt-2 text-sm p-6">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}"><br>
                            @error('last_name')
                            <div class="text-red-500 mt-2 text-sm p-6">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"><br>
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password"><br>
                                    @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                @endsection
                </form>

            </div>
        </div>
    </div>

</body>

<<<<<<< refs/remotes/origin/tom
>>>>>>> commit
=======
</html>
>>>>>>> Test
=======
>>>>>>> footer, forms
=======
    
>>>>>>> styling updates
=======

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
                <form id="add-blog-post-form" method="post">
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
                                @endsection
                                </div>
                               
                                </div>
                </form>

            </div>
        </div>
    </div>
>>>>>>> fix
