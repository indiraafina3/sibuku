<?php include 'header.php';
      include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form input penulis buku</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="simpan_penulis.php" method="post">
		 <div class="form-group">
    <label>Nama Penulis</label>
    <input type="name" name="nama_penulis" class="form-control"  placeholder="Nama
    ">
  </div>
  <div class="form-group">
    <label ">Tanggal lahir</label>
    <input type="date" name="Tanggal_Lahir" class="form-control" >
  </div>
  <div class="form-group">
    <label>Biografi</label>
    <textarea name="Biografi" class="form-control"> </textarea>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <section><input name="Jenis_Kelamin" type="radio" name="gender" value="M" checked">Laki-laki</section>
      <input name="Jenis_Kelamin" type="radio" name="gender" value="F">Perempuan
  </div>
  <div class="form-group">
    <label>Pendidikan</label>
    <select name="Pendidikan" class="form-control">
    <?php
    $Pendidikan = array (
    array('singkatan' => 'sd' , 'level_sekolah' => 'Sekolah Dasar' ),
    array('singkatan' => 'smp', 'level_sekolah' => 'Sekolah Menengah Pertama'),
    array('singkatan' => 'sma', 'level_sekolah' => 'Sekolah Menengah Atas'),
    array('singkatan' => 'd4', 'level_sekolah' => 'Diploma 4'),
    array('singkatan' => 's1', 'level_sekolah' => 'Strata 1'),
    array('singkatan' => 's2', 'level_sekolah' => 'Strata 2'),);
foreach ($Pendidikan as $p) { echo "<option value='$p[singkatan]'>$p[level_sekolah]</option>";
}
?>
    <option value="sd"> Sekolah dasar</option>
    <option value="smp"> Sekolah menengah pertama</option>
    <option value="sma"> Sekolah menengah atas</option>
    </select>
  </div>
  <div class="form-group"><button type="Submit" class="btn btn-success">Submit</button>
  <button type="button" class="btn btn-danger">Kembali</button></div>
	</form>
</body>
</html>
 <?php include 'footer.php';?>