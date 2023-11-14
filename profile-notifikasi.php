<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profile.css">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head> -->

<?php
$title = 'iloseru/Halaman Depan';
include('template/header.php');
// include('template/navbar.php');

?>

<body>
    <nav>
        <div class="nav-logo">
            <img src="logo/Logo.png" alt="Logo">
            <h1>iloseru</h1>
        </div>
        <div class="nav-text">
            <a href="#">Beranda</a>
            <a href="#">Laporan</a>
            <a href="#">Kontak</a>
            <img src="logo/lonceng.png" alt="Notifikasi">
            <img src="logo/Profile.png" alt="Profil">
            <a href="#">Nama Pengguna</a>
        </div>
    </nav>
    <main>
        <div class="profile">
            <div class="profile-logo">
                <img src="logo/Profile.png" alt="Profil">
            </div>
            <div class="profile-text">
                <h1>Nama Pengguna</h1>
                <a href="#">nama@gmail.com</a>
            </div>
            <div class="text-kanan">
                <a href="#">Lihat Profil</a>
            </div>
        </div>
        <form action="">
            <div class="table">
                <div class="left">
                    <ul>
                        <li><a href="profile.html" class="berandaLink">Ubah Profil</a></li>
                        <li><a href="profile-notifikasi.html" class="berandaLink">Notifikasi</a></li>
                        <li><a href="#" class="berandaLink">Ubah Kata Sandi</a></li>
                    </ul>
                </div>
                <div class="right">
                    <h2>Notifikasi</h2>
                    <hr>
                </div>

            </div>
        </form>
    </main>

    <script>
        $(document).ready(function() {
            var currentPage = window.location.pathname.split('/').pop();
            $("nav a").removeClass("active");

            if (currentPage === "beranda.php") {
                $("#berandaLink").addClass("active");
            } else if (currentPage === "laporan.php") {
                $("#laporanLink").addClass("active");
            } else if (currentPage === "kontak.php") {
                $("#kontakLink").addClass("active");
            }
        });
    </script>

</body>

</html>