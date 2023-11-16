<?php session_start() ?>

<!-- <header class="header">
    <nav class="navbar">
        <div class="logo">
            <img src="logo/Logo.png">
        </div>
        <div class="menu">
            <a href="index.php">Beranda</a>
            <?php if (isset($_SESSION['nama_lengkap'])) { ?>
                <a href="halaman-depan.php">Data Pengaduan</a>
            <?php } ?>
            <a href="pengaduan.php">Laporan</a>
            <a href="#">Kontak</a>
            <a href="#">Logout</a>
        </div>
    </nav>
</header> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo/Logo.png" alt="Bootstrap" width="50" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>