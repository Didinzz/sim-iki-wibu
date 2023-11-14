<?php session_start() ?>

<header class="header">
    <nav class="navbar">
        <div class="logo">
            <img src="logo/Logo.png">
        </div>
        <div class="menu">
            <a href="beranda.php">Beranda</a>
            <?php if (isset($_SESSION['nama_lengkap'])) { ?>
                <a href="halaman-depan.php">Data Pengaduan</a>
            <?php } ?>
            <a href="pengaduan.php">Laporan</a>
            <a href="#">Kontak</a>
            <a href="#">Logout</a>
        </div>
    </nav>
</header>