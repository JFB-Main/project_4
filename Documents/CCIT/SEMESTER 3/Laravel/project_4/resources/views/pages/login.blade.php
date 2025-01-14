<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up and Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script>
        window.sharedData = {};
    </script>
    <script src="javascript/login.js"></script>
</head>

<body>
    <div class="wrapper">
        <form id="loginForm">
            <h1>Log In</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="Username/Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember Me!</label>
                <a href="#"> Forgot Password? </a>
            </div>

            <button type="submit" class="btn"> Log In </button>

            <div class="register-link">
                <p> Don't Sign Up Yet? <a href="signup.html">Sign Up!</a> </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>
