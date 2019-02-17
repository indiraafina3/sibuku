<?php include 'header.php';
      include 'koneksi.php';
      $kode_buku = $_GET ['kode_buku'];
      $sql = mysqli_query ($connect, "SELECT * from buku WHERE kode_buku='$kode_buku'");
      $buku= mysqli_fetch_array($sql);
      ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form input data buku</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="update_buku.php" method="post">
		 <div class="form-group">
    <label>Kode Buku</label>
    <input type="text" value="<?php echo $buku['kode_buku'];?>" name="kode_buku" class="form-control"  placeholder="Kode Buku
    " readonly>
  </div>
  <div class="form-group">
    <label ">Judul Buku</label>
    <input type="text" value="<?php echo $buku['judul_buku'];?>" name="judul_buku" class="form-control" placeholder="Judul Buku" >
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" value="<?php echo $buku['deskripsi'];?>"> </textarea>
  </div>
  <div class="form-group">
    <label>Penulis</label>
    <select name="id_penulis" class="form-control">
    <?php
    $penulis = mysqli_query($connect, "select * from penulis");
    while ($p = mysqli_fetch_array($penulis))
      { echo "<option value ='$p[id_penulis]'";
        echo $p['id_penulis']==$buku['id_penulis']?'selected':'';
        echo ">$p[nama_penulis] </option>";
}
?>
</select>
<br>
<div class="form-group">
    <label>Kategori</label>
    <select name="id_kategori" class="form-control">
    <?php
    $kategori = mysqli_query($connect, "select * from kategori");

    while ($k = mysqli_fetch_array($kategori))
      { echo "<option value ='$k[id_kategori]'";
        echo $k['id_kategori']==$buku['id_kategori']?'selected':'';
        echo ">$k[nama_kategori] </option>";
}
?>
    </select>
</div>
  <div class="form-group"><button type="Submit" class="btn btn-success">Submit</button>
  <a href="list_buku.php" class="btn btn-danger btn-sm">Kembali</a></div>
	</form>
</body>
</html>
 <?php include 'footer.php';?>