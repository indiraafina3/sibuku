<?php include 'koneksi.php';
	  include 'header.php';?>
<h4>Penulis</h4>
<table class="table table-bordered">
<tr><th width="10">NO</th><th width="20">PENULIS</th><th width="10">TANGGAL LAHIR</th><th width="110">BIOGRAFI</th><th width="20">JENIS KELAMIN</th><th width="10">PENDIDIKAN</th><th width="10">ACTION</th></tr>
<?php 
$sql = "select * from penulis";
$authors = mysqli_query($connect, $sql);
$no=1;
while($author= mysqli_fetch_array($authors)) {
?>
<tr><td><?php echo $no;?></td>
	<td><?php echo $author ['nama_penulis']?></td>
	<td><?php echo $author ['Tanggal_Lahir']?></td>
	<td><?php echo $author ['Biografi']?></td>
	<td><?php 
	if($author['Jenis_Kelamin']=='M') {echo "Laki-Laki";}
	else { echo "Perempuan"; } ?></td>
	<td><?php echo $author ['Pendidikan']?></td>
	<td><a href="edit_penulis.php?id_penulis=<?php echo $author['id_penulis']?>" class="btn btn-success btn-sm">edit</a>
	<a href="delete_penulis.php?id_penulis=<?php echo $author ['id_penulis']?>" class="btn btn-danger btn-sm">delete</td>
</tr>
<?php $no++; } ?>
	</table>
<a href="Input_penulis.php" class="btn btn-info btn-sm">Tambah Data</a>
<?php include 'footer.php';?>