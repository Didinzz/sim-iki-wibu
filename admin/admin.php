<?php
$title = 'Admin';
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
            <div class="dashboard">Dashboard</div>
            <br>
            <div class="container-fluid">
                <div class="row row-cols-4 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border bg-light">Petugas</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">Semua Pengaduan</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">Pengaduan Selesai</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Java Script-->
    <script src="Admin.js"></script>
</body>

</html>