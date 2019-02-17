<?php
include 'koneksi.php';
$email= $_POST['email'];
$password= $_POST['password'];
//query untuk check data user berdasarkan inputan
$sql=" SELECT * FROM user Where email='$email' and password='$password'";
$user = mysqli_query ($connect, $sql);

//menghitung jumlah data user
$countUser = mysqli_num_rows($user);


if($countUser>0) {
	//mendapatkan data user
	$profile= mysqli_fetch_array($user);
	//memulai session
	$_SESSION['nama_lengkap'] = $profile['nama_lengkap'];
	$_SESSION['status_login'] = TRUE;

	header('location:list_buku.php');
} else { header('location:login.php');
}
?>