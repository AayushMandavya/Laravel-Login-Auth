<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Login Here
    </h1>
    @if(Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
        @endif
        <form action="/login" method="post">
        @csrf
        <input type="email" name="email" ><br>
        @error('email')
        {{$message}}
        @enderror
        <input type="password" name="password"><br>
        @error('password')
            {{$message}}
        @enderror
        <button type="submit">Login</button>
</form>
</body>
</html>