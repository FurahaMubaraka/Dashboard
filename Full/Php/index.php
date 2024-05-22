<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Sign in || Sign Out</title>
</head>
<body>
<div class="preloader">
        <div class="preloader-content">
            <img src="../img/logo.jpg" alt="Preloader" class="preloader-image logo">
            <div class="loading-text">Loading <span id="progress">0</span>%</div>
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    </div>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../Backend/insert.php" method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <div class="inputBox">
                    <input type="text" name="fullname"  required="required">
                    <span>Full name</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email"  required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="password"  required="required">
                    <span>Password</span>
                </div>
                <input type="submit" value="Save" name="signupsubmit" class="button">
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../Backend/login.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <div class="inputBox">
                    <input type="text" name="username"  required="required">
                    <span>Username</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="password"  required="required">
                    <span>Password</span>
                </div>
                <a href="#">Forget Your Password?</a>
                <input type="submit" value="Save" name="loginsubmit" class="button">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../Js/script.js"></script>
    <script src="../Js/preloader.js"></script>
</body>
</html>
