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
        <div class="d-flex justify-content-center">
            <p class="font-weight-bold base-color font-size-11"><i class="bi bi-info-circle-fill"></i> Sign in with your organizational ID number</p>
        </div>    
        </div>
        
        <form class="login-form" method="POST" action="{{url('/home')}}">
            @csrf
            <div class="input-group">
             <input type="text" id="" name="user_id" placeholder="User ID">
            </div>
            <div class="input-group">
             <input type="password" id="" name="user_password" placeholder="Password">
            </div>
            <button type="submit">SIGN IN</button>
        
        </form>
        
        <div class="login-footer mt-5">
            <p>New User? <a class="mt-5" href="{{url('/register')}}">Create New Account</a></p>
            <p>Visit Uttara University <a class="mt-5" href="https://www.uttarauniversity.edu.bd">Official website</a></p>
        </div>
        
        </div>
</body>
</html>