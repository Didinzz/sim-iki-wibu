<?php
$title = 'Tanggapan';
require('../function.php');
include('../template/headerAdmin.php');


?>

<body>
    <div class="contain">
        <?php include('../template/sidebarAdmin.php'); ?>
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
            <div class="dashboard">Tanggapan</div>
            <br>
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengadu</th>
                                <th>Alamat Pengadu</th>
                                <th>Nomor Telepon Pengadu</th>
                                <th>Isi Pengaduan</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = mysqli_query($koneksi, "SELECT * FROM tb_pengaduan");
                            $id = 1;
                            while ($a = mysqli_fetch_array($sql)) { ?>

                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $a['Nama'] ?></td>
                                    <td><?= $a['Alamat'] ?></td>
                                    <td><?= $a['Telpon'] ?></td>
                                    <td><?= $a['Pengaduan'] ?></td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Tanggapi">
                                    </td>
                                    <td>Sedang diproses</td>
                                    <td> <a href="../function.php?hapus=<?= $a['id']?>" onclick="return confirm('Apakah Pengaduan Telah Selesai?')" type="button"   class=" btn btn-danger" name="hapus">selesai</a></td>
                                </tr>
                            <?php $id++;
                            } ?>

                        </tbody>
                    </table>
                    <button type="button" class="btn btn-secondary">Kirim</button>

                </div>

            </div>
        </div>

    </div>
    <!--Java Script-->
    <script src="Admin.js"></script>
    <script src="admin-tanggapan.js"></script>
</body>

</html>