<?php 
session_start();

require_once 'auth.php';
$user = new Auth();

if (isset($_POST['action']) && $_POST['action'] == 'sign-up') {
    $name = $user->validate($_POST['username']);
    $email = $user->validate($_POST['email']);
    $pass = $user->validate($_POST['password']);
    $cpass = $user->validate($_POST['cpassword']);

    if (empty($name) && empty($email) && empty($pass)) {
        echo $user->showMessage('danger', 'Data wajib diisi');
        exit();
    } else if (empty($name) && empty($email)) {
        echo $user->showMessage('danger', 'Nama dan Email wajib diisi');
        exit();
    } else if (empty($name) && empty($pass)) {
        echo $user->showMessage('danger', 'Nama dan Kata Sandi wajib diisi');
        exit();
    } else if (empty($email) && empty($pass)) {
        echo $user->showMessage('danger', 'Email dan Kata Sandi wajib diisi');
        exit();
    } else if (empty($name)) {
        echo $user->showMessage('danger', 'Nama wajib diisi');
        exit();
    } else if (empty($email)) {
        echo $user->showMessage('danger', 'Email wajib diisi');
        exit();
    } else if (empty($pass)) {
        echo $user->showMessage('danger', 'Kata Sandi wajib diisi');
        exit();
    } else {
        if ($pass != $cpass) {
            echo $user->showMessage('danger', 'Kata Sandi tidak cocok');
            exit();
        } else {
            $hpass = password_hash($pass, PASSWORD_DEFAULT);

            if ($user->user_exist($email)) {
                echo $user->showMessage('danger', 'Email ini sudah terdaftar');
                exit();
            } else {
                if ($berhasil = $user->signUp($name, $email, $hpass)) {
                    echo 'register';
                    $_SESSION['user'] = $email;
                    $_SESSION['username'] = $name;
                } else {
                    echo $user->showMessage('danger', 'Terjadi kesalahan! Coba lagi nanti.');
                    exit();
                }
            }
        }
    }
}
?>