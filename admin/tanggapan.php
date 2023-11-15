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
                                    <input type="hidden" name="idPengaduan" value="<?= $a['id'] ?>">
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $a['id'] ?>"> tanggapan
                                        </button>
                                    </td>

                                    <td> <a href="../function.php?hapus=<?= $a['id'] ?>" onclick="return confirm('Apakah Pengaduan Telah Selesai?')" type="button" class=" btn btn-danger" name="hapus">selesai</a></td> 
                                </tr>

                                <!-- Modal -->
                                <form action="" method="post">
                                    <div class="modal fade" id="staticBackdrop<?= $a['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="idPengaduan" value="<?= $a['id'] ?>">
                                                    <input type=" text" name="tanggapan" class="form-control" placeholder="Tanggapi">

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="tanggapi">Kirim</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                </div>
            <?php $id++;
                            } ?>

            </tbody>
            </table>

            </div>

        </div>
    </div>

    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->


    <!--Java Script-->
    <script src="Admin.js"></script>
    <script src="admin-tanggapan.js"></script>
</body>

</html>