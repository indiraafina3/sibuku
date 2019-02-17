<?php include 'koneksi.php';
	  //include 'header.php';
$nama_penulis = $_POST['nama_penulis'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Biografi = $_POST ['Biografi'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Pendidikan = $_POST['Pendidikan'];

//echo $nama_penulis;
//print_r($_POST);
//query untuk insert data
$sql = "insert into penulis SET nama_penulis='$nama_penulis', Tanggal_Lahir='$Tanggal_Lahir', Biografi='$Biografi', Jenis_Kelamin='$Jenis_Kelamin', Pendidikan='$Pendidikan'";
//mengeksi uery untuk insert data
$insert = mysqli_query($connect,$sql);

//if ($insert) { echo "Insert data berhasil"; } else { echo "Insert data gagal";}

 
//redirect ke halaman list penulis
header("location:penulis.php");
?>