<?php
$title = 'profile';
include('template/header.php');
// include('template/navbar.php');

?>
</head>

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
                    <h1>Ubah Profil</h1>
                    <hr>
                    <h2>Informasi Publik</h2>
                    <hr>
                    <div class="informasi">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" name="namaLengkap">
                    </div>
                    <div class="informasi">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="informasi">
                        <label for="bio">Bio</label>
                        <input type="text" id="bio" name="bio">
                    </div>
                    <div class="informasi">
                        <label for="Dusun">Dusun</label>
                        <select name="Dusun" id="Dusun">
                            <option value="Dusun 1">Dusun 1</option>
                            <option value="Dusun 2">Dusun 2</option>
                            <option value="Dusun 3">Dusun 3</option>
                            <option value="Dusun 4">Dusun 4</option>
                        </select>
                    </div>

                    <div class="informasi">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="informasi">
                        <label for="noHandphone">No Handphone</label>
                        <input type="text" id="noHandphone" name="noHandphone">
                    </div>
                    <div class="informasi">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="text" id="tanggalLahir" name="tanggalLahir">
                    </div>
                    <div class="informasi">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik">
                    </div>
                    <div class="informasi">
                        <label for="No_KK">No KK</label>
                        <input type="text" id="No_KK" name="No_KK">
                    </div>
                    <div class="jk">
                        <label for="JenisKelamin" class="jenis">Jenis Kelamin</label>
                        <input type="radio" id="pria" name="JenisKelamin" value="pria">
                        <label for="pria">Pria</label>
                        <input type="radio" id="wanita" name="JenisKelamin" value="wanita">
                        <label for="wanita">Wanita</label>
                    </div>
                    <div class="btn">
                        <button>Simpan</button>
                    </div>

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