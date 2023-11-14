<?php
require('function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,700">
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="Logo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
        <div class="logo"><img src="logo/Logo.png" alt=""></div>
        <div class="login">
            <form action="" class="login">
                <p>Masuk</p>
                <input type="text" name="email" placeholder=" Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forgot Password?</a>
                <button name="Login" type="submit">Masuk</button>
                <hr>
                <h2>Anda Belum Punya Akun? <a href="regist.php">Daftar Sekarang</a></h2>
            </form>
        </div>
    </form>
    </div>
</body>
</html>