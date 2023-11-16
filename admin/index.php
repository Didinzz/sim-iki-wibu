<?php
$title = 'Dashboard';
require('../function.php');
include('../template/headerAdmin.php');
include('../template/sidebarAdmin.php');

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 1) {
        header("location:../index.php");
    }
}

$sql = "SELECT COUNT(*) as total_petugas FROM regist WHERE role_as = 1";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPetugas = $row["total_petugas"];
    }
} else {
    $totalPetugas = 0;
}

$sql = "SELECT COUNT(*) as total_pengaduan FROM tb_pengaduan";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPengaduan = $row["total_pengaduan"];
    }
} else {
    $totalPengaduan = 0;
}

$sql = "SELECT COUNT(*) as pengaduan_belum_selesai FROM tb_pengaduan WHERE status = 'belum ditanggapi'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPengaduanBelumSelesai = $row["pengaduan_belum_selesai"];
    }
} else {
    $totalPengaduanBelumSelesai = 0;
}
$sql = "SELECT COUNT(*) as pengaduan_selesai FROM tb_pengaduan WHERE status = 'sudah ditanggapi'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPengaduanSelesai = $row["pengaduan_selesai"];
    }
} else {
    $totalPengaduanSelesai = 0;
}


?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php include('../template/navbarAdmin.php') ?>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Petugas</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPetugas ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Semua Pengaduan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPengaduan ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pengaduan Belum Selesai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPengaduanBelumSelesai ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-newspaper fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Pengaduan Selesai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPengaduanSelesai ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-newspaper fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
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

</div>

<?php include('../template/footerAdmin.php') ?>