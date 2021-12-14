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
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
Create a CryptoHunch account   </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
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
          <input type="email" name="email"  value="{{ old('email') }}"><br>
   @error('email')
   <div class="text-red-500 mt-2 text-sm">
       {{ $message }}
   </div>
   @enderror
   <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" name="password" ><br>
   @error('password')
   <div class="text-red-500 mt-2 text-sm">
       {{ $message }}
   </div>
   @enderror
   
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        @endsection
      </form>
      
    </div>
  </div>
</div>  

</body>
</html>


  
   
   

