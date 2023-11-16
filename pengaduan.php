<?php
require('function.php');
include('template/header.php');
include('template/navbar.php');
?>

<div class="container" style="margin-top: 4rem;">


    <h3>Buat Laporan</h3>
    <hr />
    <div class="row">
        <div class="col-md-8 card-shadow-2 form-custom">
            <form class="form-horizontal" role="form" method="post" action="" style="height: 100vh;">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php if (isset($_SESSION['nama_lengkap'])) echo $_SESSION['nama_lengkap'] ?>" placeholder="Nama Lengkap" value="" required>
                        </div>
                        <p class="error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
                        </div>
                        <p class="error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telpon" class="col-sm-3 control-label">Telpon</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                            <input type="text" class="form-control" id="telpon" name="telpon" placeholder="087123456789" value="" required>
                        </div>
                        <p class="error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="" required>
                        </div>
                        <p class="error"></p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pengaduan" class="col-sm-3 control-label">Isi Pengaduan</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                            <textarea class="form-control" rows="4" name="pengaduan" placeholder="Tuliskan Isi Pengaduan" required></textarea>
                        </div>
                        <p class="error"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-3">
                        <button id="submit" name="buatPengaduan" type="submit" class="btn btn-primary form-shadow"> Kirim Pengaduan</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>