<?php
$title = 'Tanggapan';
require('../function.php');
include('../template/headerAdmin.php');
include('../template/sidebarAdmin.php');


if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 1) {
        header("location:../index.php");
    }
}

?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/navbarAdmin.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Pengaduan</h1>
            <div>
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
                                        <?php if ($a['status'] == 'belum ditanggapi') : ?>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?= $a['id'] ?>"> Tanggapi
                                                </button>
                                            </td>
                                        <?php else : ?>
                                            <td>
                                                <span class="badge bg-success text-light">Sudah Ditanggapi</span>
                                            </td>
                                        <?php endif ?>

                                        <td> <a href="../function.php?hapus=<?= $a['id'] ?>" onclick="return confirm('Apakah Pengaduan Telah Selesai?')" type="button" class=" btn btn-danger" name="hapus">selesai</a></td>
                                    </tr>
                            </tbody>
                        <?php $id++;
                                } ?>
                        </table>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; 2023. SIM KEL 2</span>
            </div>
        </div>
    </footer>



    <!-- Modal -->
    <?php $sql = mysqli_query($koneksi, "SELECT * FROM tb_pengaduan");
    $id = 1;
    while ($a = mysqli_fetch_array($sql)) { ?>
        <div class="modal fade" id="staticBackdrop<?= $a['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fs-5" id="staticBackdropLabel">Tanggapi</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="idPengaduan" value="<?= $a['id'] ?>">
                            <input type="hidden" name="email_user" value="<?= $a['Email'] ?>">
                            <div class="form-floating">
                                <label for="floatingTextarea2">Tanggapi</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="tanggapan"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="tanggapi" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php $id++;
    } ?>

</div>

<?php include('../template/footerAdmin.php') ?>