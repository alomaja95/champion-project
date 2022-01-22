<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>PEGGROV GCC Admin Page </title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset ('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset ('assets/css/app.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset ('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />
</head>

<body class="light">
<div class="loginmain">
    <div class="loginCard">
        <div class="login-btn splits">
            <p>PEGGROV GCC</p>
            <p>SYMBOL OF EXCELLENCE</p>
            <p>Already an user?</p>
            <button class="active">Login</button>
        </div>
        <div class="rgstr-btn splits">
            <p>PEGGROV GCC</p>
            <p>SYMBOL OF EXCELLENCE</p>
            <p>Don't have an account?</p>
            <button>Register</button>
        </div>
        <div class="wrapper">
            <x-jet-validation-errors class="mb-4 red-text" />

            <form id="login" tabindex="500" method="POST" action="{{ route('login') }}"
{{--            <x-jet-validation-errors class="mb-4 red-text" />--}}

            <form id="register" tabindex="502" method="POST" action="{{ route('register') }}">

                @csrf
                <h3>Register</h3>
                <div class="name">
                    <input type="text" name="name" required>
                    <label>Full Name</label>
                </div>
                <div class="uid list-group">
                    <select class="list-group border-radius-per-24 red" name="role">
                        <option value="user"> User </option>
                        <option value="admin"> Admin </option>
                    </select>
                    <label>Role</label>
                </div>
                <div class="mail">
                    <input type="email" name="email" required>
                    <label>email</label>
                </div>
                <div class="passwd">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="passwd">
                    <input type="password" name="password_confirmation" required>
                    <label>confirm Password</label>
                </div>
                <div class="submit">
                    <button class="dark">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Plugins Js -->
<script src="{{asset ('assets/js/app.min.js')}}"></script>
<!-- Extra page Js -->
<script src="{{asset ('assets/js/pages/examples/login-register.js')}}"></script>
</body>
</html>
