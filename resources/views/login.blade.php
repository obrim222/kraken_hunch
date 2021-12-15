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
            <h1>Login</h1>


        </div>
    </div>
</section>



<div class="form-container">
<<<<<<< refs/remotes/origin/tom
                <form method="post">
    @csrf
    <label>Email</label><br>

    <input type="email" name="email" ><br>
=======
                <form id="add-blog-post-form" method="post">
    @csrf
    <label>Email</label><br>

    <input type="email" name="email" placeholder="E-mail"><br>
>>>>>>> fix
    @error('email')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <label>Password</label><br>

<<<<<<< refs/remotes/origin/tom
    <input type="password" name="password" ><br>
=======
    <input type="password" name="password" placeholder="Password"><br>
>>>>>>> fix
    @error('password')
    <div class="text-red-500 mt-2 text-sm p-6">
        {{ $message }}
    </div>
    @enderror
    <button type="submit" name="submit" class="button register">Login</button>
<<<<<<< refs/remotes/origin/tom

  
=======
</form>
>>>>>>> fix

</form>
</div>
@endsection