<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan");

// Periksa apakah tombol Login telah diklik
// if (isset($_POST['Login'])) {
//     session_start();

//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $cekuser = mysqli_query($koneksi, "select * from regist where email = '$email' and password = '$password'");
//     $hitung = mysqli_num_rows($cekuser);


//     // Jika email dan password ada di database, maka login berhasil
//     if ($hitung > 0) {
//         $ambilData = mysqli_fetch_array($cekuser);
//         $name = $ambilData['nama_lengkap'];
//         $email = $ambilData['email'];
//         $role_as = $ambilData['role_as'];

//         $_SESSION['nama_lengkap'] = $name;
//         $_SESSION['email'] = $email;
//         $_SESSION['role'] = $role_as;

//         if ($role_as == 1) {
//             header('Location: admin');
//         } else {
//             header('Location: index.php');
//         }
//     } else {

//         echo "Login gagal";
//     }
// }

function loginUser($koneksi, $email, $password)
{
    $cekuser = mysqli_query($koneksi, "select * from regist where email = '$email' and password = '$password'");
    $hitung = mysqli_num_rows($cekuser);

    // Jika email dan password ada di database, maka login berhasil
    if ($hitung > 0) {
        session_start();
        $ambilData = mysqli_fetch_array($cekuser);
        $name = $ambilData['nama_lengkap'];
        $email = $ambilData['email'];
        $role_as = $ambilData['role_as'];

        $_SESSION['nama_lengkap'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role_as;

        if ($role_as == 1) {
            header('Location: admin');
        } else {
            header('Location: index.php');
        }
    } else {
        return "Email Dan Password Salah!";
    }
}



if (isset($_POST['buatPengaduan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $pengaduan = $_POST['pengaduan'];


    $sql = mysqli_query($koneksi, "INSERT INTO tb_pengaduan (Nama, Email, Telpon, Alamat, Pengaduan) 
            VALUES ('$nama', '$email', '$telpon', '$alamat', '$pengaduan')");
    // $rs = $koneksi->prepare($sql);


    if ($sql) {

        header("Location:halaman-depan.php");
    } else {
        echo "Data tidak terkirim";
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $queryShow = "SELECT * FROM tb_pengaduan WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    // $deleteTanggapan = "DELETE FROM tb_tanggapan id = "
    $query = "DELETE FROM tb_pengaduan WHERE id = '$id'";
    $query2 = "DELETE FROM tb_tanggapan WHERE id_pengaduan = '$id'";
    $sql = mysqli_query($koneksi, $query);
    $sql = mysqli_query($koneksi, $query2);

    if ($sql) header("Location: admin/tanggapan.php");
}

if (isset($_POST['register'])) {
    $NIK = $_POST['NIK'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $sql = "INSERT INTO regist (NIK, nama_lengkap, jenis_kelamin, tanggal_lahir, email, no_telp, password, role_as) 
        VALUES ('$NIK', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir',
        '$email', '$no_telp', '$password', 1)";
        $rs = $koneksi->prepare($sql);

        $save = $rs->execute();
        header("Location:Login.php");
    }
    echo 'Password Dan Konfir Password Tidak Sama';
    header("Location:regist.php");
}

if (isset($_POST['tanggapi'])) {
    $pengaduan = $_POST['idPengaduan'];
    $tanggapan = $_POST['tanggapan'];
    var_dump($pengaduan);
    $sql = mysqli_query($koneksi, "INSERT INTO tb_tanggapan(id_pengaduan ,tanggapan) VALUES ('$pengaduan','$tanggapan')");

    if ($sql) {
        header('Location:tanggapan.php');
    } else {
        echo "data tidak terkirim";
    }
}
