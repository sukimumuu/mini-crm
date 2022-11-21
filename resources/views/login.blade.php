<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/minicrm.css">
    <!-- CSS only -->
</head>
<body bgcolor="#345bcb">
      <div class="logincontainer">
        <div class="title"><p>Centreeedata Login</p></div>
        
        <div class="ferom">
        <form action="/loginuser" method="post">
            @csrf
            <div class="inputlogin">
                <input type="email" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="inputlogin">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <input type="submit" value="Login" id="login">
        </form>
        <a href="/register">Create new account</a>
      </div>
</div>
</body>
</html>