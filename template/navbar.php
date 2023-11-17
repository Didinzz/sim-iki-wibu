<?php session_start();
$page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
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
                    <a class="nav-link <?php if ($page == 'index.php') echo 'active' ?> " aria-current="page" href="index.php">Beranda</a>
                </li>
                <?php if (isset($_SESSION['nama_lengkap'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($page == 'halaman-depan.php') echo 'active' ?>" aria-current="page" href="halaman-depan.php">Pengaduan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'pengaduan.php') echo 'active' ?>" aria-current="page" href="pengaduan.php">Laporan</a>
                    </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="profilinstansi.php">Profile</a>
                </li>
                <?php if (isset($_SESSION['nama_lengkap'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>