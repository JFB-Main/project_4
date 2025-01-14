<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign Up and Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Mengimpor CSS SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="wrapper">
        <form id="signupForm" method="POST" action="Php/signup.php">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="    Input Email    " required aria-label="Input Email" autocomplete="off">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="    Create Username    " required aria-label="Create Username" autocomplete="off">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="    Create Password    " required aria-label="Create Password" autocomplete="off" pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}" title="Password must be minimum 8 characters, include at least one letter and one number.">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="repassword" id="repassword" placeholder="    Re-type Password    " required aria-label="Re-type Password" autocomplete="off">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="agreeTerms" id="agreeTerms" required> I Agree for All Terms and Conditions </label>
                <a href="#"> More </a>
            </div>

            <button type="submit" class="btn"> Sign Up! </button>

            <div class="register-link">
                <p>Already Have an Account? <a href="login.html">Log In!</a></p>
            </div>
        </form>
    </div>

    <!-- Mengimpor JS SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Mengimpor file JavaScript terpisah -->
    <script src="javascript/signup.js"></script>
</body>
</html>
