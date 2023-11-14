<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan");


// Periksa apakah tombol Login telah diklik
if (isset($_POST['Login'])) {
    session_start();

    // Dapatkan nilai email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi email dan password
    // if (empty($email)) {
    //     echo "Email tidak boleh kosong";
    // } else if (empty($password)) {
    //     echo "Password tidak boleh kosong";
    // } else {

    // Cek apakah email dan password ada di database
    $cekuser = mysqli_query($koneksi, "select * from regist where email = '$email' and password = '$password'");
    $hitung = mysqli_num_rows($cekuser);
  

        // Jika email dan password ada di database, maka login berhasil
        if ($hitung > 0) {
        $ambilData = mysqli_fetch_array($cekuser);
        $name = $ambilData['nama_lengkap'];
        $email = $ambilData['email'];

        $_SESSION['nama_lengkap'] = $name;
        $_SESSION['email'] = $email;

            header('Location: halaman-depan.php');
        } else {

            // Login gagal
            echo "Login gagal";
        }
    }



if (isset($_POST['buatPengaduan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $pengaduan = $_POST['pengaduan'];


    $sql = mysqli_query( $koneksi,"INSERT INTO tb_pengaduan (Nama, Email, Telpon, Alamat, Pengaduan) 
            VALUES ('$nama', '$email', '$telpon', '$alamat', '$pengaduan')");
    // $rs = $koneksi->prepare($sql);


        if($sql){

            header("Location:halaman-depan.php");
        }else{
            echo "Data tidak terkirim";

        }
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $queryShow = "SELECT * FROM tb_pengaduan WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);


    $query = "DELETE FROM tb_pengaduan WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

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


    $sql = "INSERT INTO regist (NIK, nama_lengkap, jenis_kelamin, tanggal_lahir, email, no_telp, password, confirm_password) 
            VALUES ('$NIK', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir',
            '$email', '$no_telp', '$password', '$confirm_password')";
    $rs = $con->prepare($sql);

    $save = $rs->execute();
    header("Location:Login.html");
}


?>