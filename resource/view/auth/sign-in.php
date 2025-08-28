<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sign In Account</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- Icon -->
    <link rel='shortcut icon' href='../assets/img/icon-tab.jpg'>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="#" method="post" id="login-form" class="login">
            <h2>Sign In</h2>
            <p>Enter your email and password below</p>
            <div id="logAlert"></div>
            <label>EMAIL</label>
            <input type="text" name="email" placeholder="Enter your email"
                value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>">

            <label>PASSWORD</label>
            <input type="password" name="password" placeholder="Enter your password"
                value="<?php if (isset($_GET['password'])) echo (htmlspecialchars($_GET['password'])) ?>">
            <br>

            <button type="submit" id="login-btn">Sign in your account</button>
            <div class="btn-cancel">
                <a href="sign-up.php">Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>