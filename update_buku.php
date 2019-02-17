<?php // mengingclude konfigurasi koneksi
		include 'koneksi.php';
	  //include 'header.php';
// menyimpan data yang diinput ke dalam variabel
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$deskripsi = $_POST ['deskripsi'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];

//echo $nama_penulis;
//print_r($_POST);
//query untuk insert data
$sql = "UPDATE buku SET judul_buku='$judul_buku', deskripsi='$deskripsi', id_penulis='$penulis', id_kategori='$kategori'
		where kode_buku='$kode_buku'";

//mengeksi query untuk insert data
$insert = mysqli_query($connect,$sql);

//if ($insert) { echo "Insert data berhasil"; } else { echo "Insert data gagal";}

 
//redirect ke halaman list penulis
header("location:list_buku.php");
?>