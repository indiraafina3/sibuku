<?php
include 'koneksi.php';
$id_kategori = $_GET['id_kategori'];
mysqli_query($connect, "delete from kategori where id_kategori='$id_kategori'");
header('location:daftar_kategori.php');
?>