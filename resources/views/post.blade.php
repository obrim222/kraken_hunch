<<<<<<< refs/remotes/origin/tom
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBlog</title>
</head>

<body>
    <h1>Add Blog</h1>
    <form method="post">
        @csrf
<<<<<<< refs/remotes/origin/tom

=======
        <input type="text" name="author_id" value="{{ old('author_id') }}" placeholder="Author id"><br>
        @error('author_id')
        <div>
            {{ $message }}
        </div>
        @enderror
>>>>>>> commit
        <input type="text" name="blog" placeholder="Blog" value="{{ old('blog') }}"> <br>
        @error('blog')
        <div>
            {{ $message }}
        </div>
        @enderror
<<<<<<< refs/remotes/origin/tom
        <input type="text" name="coin_id" placeholder="Coin id" value="{{ old('coin_id') }}"> <br>
=======
        <input type="number" name="coin_id" placeholder="Coin id" value="{{ old('coin_id') }}"><br>
>>>>>>> commit
        @error('coin_id')
        <div>
            {{ $message }}
        </div>
        @enderror
<<<<<<< refs/remotes/origin/tom

=======
>>>>>>> commit
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddBlog</title>
</head>

<body>
    <h1>Add Blog</h1>
    <form method="post">
        @csrf

        <input type="text" name="blog" placeholder="Blog" value="{{ old('blog') }}"> <br>
        @error('blog')
        <div>
            {{ $message }}
        </div>
        @enderror
        <input type="text" name="coin_id" placeholder="Coin id" value="{{ old('coin_id') }}"> <br>
        @error('coin_id')
        <div>
            {{ $message }}
        </div>
        @enderror

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

>>>>>>> fix
</html>