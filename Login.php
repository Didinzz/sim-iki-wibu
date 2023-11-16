<?php
require('function.php');
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errorMsg = loginUser($koneksi, $email, $password);
}
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
                    <?php if (isset($errorMsg)) : ?>
                        <div class="text-merah"><?= $errorMsg ?></div>
                    <?php endif ?>
                    <p>Masuk</p>
                    <input type="text" name="email" placeholder=" Email"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <a href="#">Forgot Password?</a><br>
                    <button name="Login" type="submit">Masuk</button>
                    <hr>
                    <h2>Anda Belum Punya Akun? <a href="regist.php">Daftar Sekarang</a></h2>
                </form>
            </div>
        </form>
    </div>
</body>

</html>