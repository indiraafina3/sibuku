<?php include 'koneksi.php';
	  include 'header.php';?>
<h4>Data Buku</h4>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
<input type="text" name="keyword" placeholder="pencarian data" class="form-control">
<button type="submit" name="cari">Cari Data</button></form>
<table class="table table-bordered">
<tr><th width="10">NO</th><th width="10">KODE BUKU</th><th width="110">JUDUL</th><th>PENULIS</th><th>KATEGORI</th><th>ACTION</th></tr>
<?php 
$sql = "select p.nama_penulis,b.judul_buku,b.kode_buku,k.id_kategori, k.nama_kategori from buku as b,penulis as p, kategori as k where p.id_penulis=b.id_penulis and k.id_kategori=b.id_kategori";
$books = mysqli_query($connect, $sql);
$no=1;
while($book= mysqli_fetch_array($books)) {
?>
<tr><td><?php echo $no;?></td>
	<td><?php echo $book ['kode_buku']?></td>
	<td><?php echo $book ['judul_buku']?></td>
	<td><?php echo $book ['nama_penulis']?></td>
	<td><?php echo $book ['nama_kategori']?></td>
	<td><a href="edit_buku.php?kode_buku=<?php echo $book ['kode_buku']?>" class="btn btn-success btn-sm">edit</a>
		<a href="delete_buku.php?kode_buku=<?php echo $book ['kode_buku']?>" class="btn btn-danger btn-sm">delete</td>
</tr>
<?phpif (isset($_POST('cari'))) {
	$keyword = $_POST['keyword'];
	$sql = "select p.nama_penulis,b.judul_buku,b.kode_buku,k.nama_kategori from buku as b,penulis as p, kategori as k
			where p.id_penulis=b.id_penulis and b.id_kategori=k.id_kategori
			and b.judul_buku like '%$keyword%' order by b.kode_buku";
} else {
		$sql = "select p.nama_penulis,b.judul_buku,b.kode_buku,k.nama_kategori
				from buku as b,penulis as p, kategori as k
				where p.id_penulis=b.id_penulis and b.id_kategori=k.id_kategori order by b.kode_buku"
}?>
<?php $no++; } ?>
	</table>
<a href="input_buku.php" class="btn btn-success btn-sm">Tambah Data</a>
<?php include 'footer.php';?>
<!--select p.Nama,b.judul_buku,b.kode_buku,k.id_kategori
		from buku as b,penulis as p, kategori as k
		where p.id_penulis=b.id_penulis and k.id_kategori=b.id_kategori-->