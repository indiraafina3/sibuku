<?php include 'koneksi.php';
	  //include 'header.php';
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST ['judul_buku'];
$deskripsi = $_POST['deskripsi'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
//echo $nama_penulis;
//print_r($_POST);
//query untuk insert data
$sql = "insert into buku SET kode_buku='$kode_buku', judul_buku='$judul_buku', deskripsi='$deskripsi', id_penulis='$penulis', id_kategori='$kategori'";

//mengeksi uery untuk insert data
$insert = mysqli_query($connect,$sql);

/*if ($insert) { echo "Insert data berhasil"; } else {  echo 'Gagal';} */

header("location:list_buku.php");
?>