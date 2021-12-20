@if ($message = Session::get('success'))
<p style="color:green">{{ $message }}</p>
@endif

@if ($message = Session::get('error'))
<p style="color:red">{{ $message }}</p>
@endif

<h1>Users List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>first name</td>
        <td>last name</td>
        <td>email</td>
        <td>Comment</td>

</tr>

@foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->first_name}}</td>
<td>{{$user->last_name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->comment}}</td>
<td><a href={{"adminPage/delete/".$user['id']}}>Delete Comment</a></td>
<td><a href={{"adminPage/delete/".$user['id']}}>Delete User</a></td>
</tr>
@endforeach

</table>

<body>
    <h1>Add Blog</h1>
    <form method="post">
        @csrf
    
        <input type="text" name="comment" placeholder="Blog" value="{{ old('comment') }}"> <br>
        @error('comment')
        <div>
            {{ $message }}
        </div>
        @enderror

        <input type="submit" name="submit" value="Submit">
    </form>

    <button><a href=home>Home</a></button>
  
</tr>
<?php

/*
@foreach($comments as $comment)
<tr>
<td>{{$comment->comment}}</td>

<td><a href={{"adminPage/delete/".$user['id']}}>Delete</a></td>
</tr>
{{--@endforeach--}}

</table>

</body>
*/
?>