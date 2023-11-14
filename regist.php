<?php
require('function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,700">
    <link rel="stylesheet" href="CSS/regist.css?v=<?php echo time(); ?>">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form action="regist.php" method="post">
            <div class="logo"><img src="logo/Logo.png" alt=""></div>
            <div class="login">
                <form action="#">
                    <div class="title">
                        <p>Register</p>
                    </div>
                    <hr>
                    <div class="user">
                        <div class="box">
                            <span class="details">NIK</span>
                            <input name="NIK" type="text" placeholder="Nomor induk kependudukan (KTP)">
                        </div>
                        <div class="box">
                            <span class="details">Nama Lengkap</span>
                            <input name="nama_lengkap" type="text" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="box">
                            <span class="details">Pilih Jenis Kelamin</span>
                            <select name="jenis_kelamin" id="JK">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="box">
                            <span class="details">Tanggal Lahir</span>
                            <input name="tanggal_lahir" type="date" required>
                        </div>
                        <div class="box">
                            <span class="details">Email</span>
                            <input name="email" type="email" placeholder="Alamat email">
                        </div>
                        <div class="box">
                            <span class="details">No.Telp Aktif</span>
                            <input name="no_telp" type="tel" placeholder="Minimal 8-14 Angka required">
                        </div>
                        <div class="box">
                            <span class="details">Password</span>
                            <input name="password" type="password" placeholder="Minimal 8 karakter & berisi alfanumeri">
                        </div>
                        <div class="box">
                            <span class="details">Confirm Password</span>
                            <input name="confirm_password" type="password" placeholder="Konfirmasi Password" required>
                        </div>
                    </div>
                    <button type="submit" name="register">Daftar</button>
                    <div class="hr">Atau Masuk Dengan</div>
                    <div class="bawah">
                        <h2>Sudah punya akun? <a href="Login.php">Masuk Sekarang</a></h2>
                    </div>
                </form>
            </div>
        </form>
    </div>
</body>

</html>