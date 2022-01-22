<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>PEGGROV GCC Login </title>
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
            <p>Already an user?</p>
            <button class="active">Login</button>
        </div>
        <div class="rgstr-btn splits">
            <p>Welcome to PEGGROV GCC</p>
            <button>SYMBOL OF EXCELLENCE</button>
        </div>
        <div class="wrapper">
            <form id="login" tabindex="500">
                <h3>Login</h3>
                <div class="mail">
                    <input type="email" name="username" required>
                    <label>Email or Username</label>
                </div>
                <div class="passwd">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="text-end p-t-8 p-b-31">
                    <a href="#">
                        Forgot password?
                    </a>
                </div>
                <div class="submit">
                    <button class="dark">Login</button>
                </div>
                <div class="flex-c p-b-112">
                    <a href="#" class="login100-social-item bg-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="login100-social-item bg-twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="login100-social-item bg-google">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Plugins Js -->
<script src="{{asset ('assets/js/app.min.js')}}"></script>
</body>
</html>
