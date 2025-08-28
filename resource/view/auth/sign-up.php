<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Account</title>
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
        <form action="#" method="post" id="register-form" class="register">
            <h2>Daftar Akun</h2>
            <p>Masukkan data anda di bawah ini</p>
            <div id="logAlert"></div>

            <label>USERNAME</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <label>EMAIL</label>
            <input type="email" name="email" placeholder="Masukkan Email">

            <label>PASSWORD</label>
            <input type="password" name="password" id="ipassword" placeholder="Masukkan Kata Sandi">
            <label>CONFIRM PASSWORD</label>
            <input type="password" name="cpassword" id="cpassword" placeholder="Masukkan Konfirmasi Kata Sandi">
            <div id="passEror"></div>
            <br>

            <button type="submit" id="register-btn">Sign Up Account</button>
            <div class="btn-cancel">
                <a href="sign-in.php">SIgn In</a>
            </div>
        </form>
    </div>
</body>

</html>