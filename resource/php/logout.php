<?php
session_start();
unset($_SESSION['user']);
header("Location: ../view/auth/sign-in.php");