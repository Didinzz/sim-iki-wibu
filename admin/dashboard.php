<?php
$title = 'Dashboard';
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
            <div class="dashboard">Dashboard
                <hr style="width: 100%; height: 2px; background-color: black;">
            </div>
            <br>
            <div class="container-fluid">
                <div class="row row-cols-4 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col custom-col isi">
                        <a href="">
                            <div class="p-3 border bg-light">Petugas
                                <br>
                                <span>1</span><img src="" alt="">
                            </div>
                    </div></a>
                    <div class="col custom-col">
                        <a href="">
                            <div class="p-3 border bg-light">Semua Pengaduan
                                <br>
                                <span>1</span><img src="" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col custom-col">
                        <a href="">
                            <div class="p-3 border bg-light">Pengaduan Selesai
                                <br>
                                <span>1</span><img src="" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Java Script-->
    <script src="Admin.js"></script>
</body>

</html>