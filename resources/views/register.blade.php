<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/images/header_logo.png" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ url('login.css') }}" />
</head>
<body>
    <div class="login-container">

        <div class="login-header">
        
            <img src="{{ url('header_logo.png') }}" alt="University Logo">
            <div class="d-flex justify-content-center">
                <a href="https://uttarauniversity.edu.bd" class="logo d-flex align-items-center w-auto font-weight-bold font-size-15" style="color: #1D45B5 ">UTTARA UNIVERSITY</a>
            </div>  
        </div>
        
        <form class="login-form" method="POST" action="{{url('/login')}}">
            @csrf
            <div class="input-group">
             <input type="text" id="user-id" name="name" placeholder="Name">
            </div>
            <div class="input-group">
                <input type="text" id="user-id" name="stdid" placeholder="ID">
            </div>
            <div class="input-group">
                <input type="text" id="user-id" name="password" placeholder="Password">
            </div>
            <div class="input-group">
                <input type="text" id="user-id" name="conformpassword" placeholder="Conform Password">
            </div>
            <button type="submit">Create Account</button>
        </form>
        
      
        
        </div>
</body>
</html>