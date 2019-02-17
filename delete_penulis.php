<?php
include 'koneksi.php';
$id_penulis = $_GET['id_penulis'];
mysqli_query($connect, "delete from penulis where id_penulis='$id_penulis'");
header("location:penulis.php");
?>