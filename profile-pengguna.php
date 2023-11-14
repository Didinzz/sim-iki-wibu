<?php
$title = 'profile';
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
    <!--ini main bagian table-->
    <div class="profile">
      <div class="profile-logo">
        <img src="logo/Profile.png" alt="Profil">
      </div>
      <div class="profile-text">
        <h1>Nama Pengguna</h1>
        <p id="laporan">Laporan</p>
        <button>Ubah</button>
      </div>
    </div>
    <hr style="border-bottom: 2px solid;">

    <div class="atas">
      <ul>
        <li><a href="#">Semua</a></li>
        <li><a href="#">Belum</a></li>
        <li><a href="#">Proses</a></li>
        <li><a href="#">Selesai</a></li>
      </ul>
      <hr style="border-bottom: 2px solid;">
    </div>
    <div class="mf">
      <div class="tampilan">
        <div class="profile-logo2">
          <img src="logo/Profile.png" alt="">
        </div>
        <div class="profile-info">
          <h3>Nama Pengguna</h3>
          <div class="date-info">
            <img src="logo/tanggall.png" alt="">
            <p id="tanggal"></p>
          </div>
        </div>
        <div class="disposisi">
          <p>Terdisposisi ke <span>Dinas </span></p>
        </div>
      </div>

      <div class="outer-table">
        <table class="inner-table">
          <tr>
            <td>
              Kategori populer:
              <table class="inner-table">
                <tr>
                  <td>Nama Kategori</td>
                  <td>Jumlah</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              lihat
            </td>
          </tr>
        </table>
      </div>
    </div>
  </main>
  <script>
    // Fungsi untuk mendapatkan tanggal sekarang
    function tanggalOtomatis() {
      var sekarang = new Date();
      var tanggal = sekarang.getDate();
      var bulan = sekarang.getMonth() + 1; // Ingat, bulan dimulai dari 0
      var tahun = sekarang.getFullYear();

      // Format tanggal dengan "DD-MM-YYYY"
      var tanggalFormat = tanggal + '-' + bulan + '-' + tahun;

      return tanggalFormat;
    }

    // Mendapatkan elemen p dengan id "tanggal"
    var elemenTanggal = document.getElementById("tanggal");

    // Menetapkan teks pada elemen tersebut dengan tanggal otomatis
    elemenTanggal.textContent = "Tanggal: " + tanggalOtomatis();
  </script>
  <script>
    // Ambil parameter jumlahLaporan dari URL.
    const urlParams = new URLSearchParams(window.location.search);
    const jumlahLaporan = urlParams.get("jumlahLaporan");

    // Cek apakah parameter jumlahLaporan ada dan valid.
    if (jumlahLaporan) {
      // Update elemen <p> dengan jumlah laporan.
      const elemenLaporan = document.getElementById("laporan");
      elemenLaporan.textContent = `Laporan (${jumlahLaporan})`;
    } else {
      // Fallback jika parameter tidak ada atau tidak valid.
      console.error("Parameter jumlahLaporan tidak valid.");
    }
  </script>
</body>

</html>