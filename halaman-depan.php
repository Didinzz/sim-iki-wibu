<?php
$title = 'iloseru/Halaman Depan';
require('function.php');
include('template/header.php');
include('template/navbar.php');
session_start();
?>



<main>
    <div class="header1">
        <a href="#"><img src="img/home.gif"></a>
        <h1>Welcome/Selamat Datang</h1>
        <hr>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama </th>
                <th scope="col">Alamat </th>
                <th scope="col">Pengaduan</th>
                <th scope="col">Tanggapan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nama_lengkap = $_SESSION['nama_lengkap'];
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_pengaduan WHERE Nama = '$nama_lengkap' ");
            $id = 1;
            while ($a = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <th scope="row"><?= $id ?></th>
                    <td><?= $a['Nama'] ?></td>
                    <td><?= $a['Alamat'] ?></td>
                    <td><?= $a['Pengaduan'] ?></td>
                    <td>@mdo</td>

                <?php $id++;
            } ?>
                </tr>
        </tbody>
    </table>
</main>

<?php include('template/footer.php'); ?>