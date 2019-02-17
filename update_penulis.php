<?php
// menginclude konfigurasi koneksi
include 'koneksi.php';
// menyimpan data yang di input kedalam variabel
$nama_penulis   = strtoupper($_POST['nama_penulis']);
$tanggal_lahir  = $_POST['Tanggal_Lahir'];
$biografi       = $_POST['Biografi'];
$jenis_kelamin  = $_POST['Jenis_Kelamin'];
$pendidikan     = $_POST['Pendidikan'];
$id_penulis     = $_POST['id_penulis'];
// query untuk insert data
$sql = "Update penulis SET nama_penulis='$nama_penulis',Tanggal_Lahir='$Tanggal_Lahir',
        Biografi='$Biografi',Jenis_Kelamin='$Jenis_Kelamin',
        Pendidikan='$Pendidikan' where id_penulis='$id_penulis'";
// mengeksekusi query untuk insert data
$insert = mysqli_query($connect, $sql);
/*
if($insert){
    echo "Insert Data Berhasil";
}else{
    echo "Insert Data Gagal";
}
 */
// redirect ke halaman list penulis
header("location:penulis.php");
?>