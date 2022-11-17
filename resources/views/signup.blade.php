<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
</head>
<body>
    <h1>
        SignUp Page
    </h1>
    <form action="/signup" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="email" name="email" id="" placeholder="Enter your email"><br>
        <input type="password" name="password" id="" placeholder="Enter password here"><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>