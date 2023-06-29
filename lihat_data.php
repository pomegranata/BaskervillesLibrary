<!DOCTYPE html>
<html>
	<head>
		<title>Data Buku</title>
		<style type="text/css">
			body		{
							background-color: #0B2447;
						}
			table,tr,td {
							color: #FFFFFF;
							border: 1px solid;
							border-color:#576CBC;
						}
			thead 		{
							background-color: #576CBC;
						}
			input {
				background: #FFFFFF;
				border-radius: 999px;
				box-shadow: #5E5DF0 0 10px 20px -10px;
				box-sizing: border-box;
				color: #1d1d1d;
				font-family: Inter,Helvetica;
				font-size: 14px;
				font-weight: 600;
				padding: 8px 18px;
			}
			
			.pagination {
				display: inline-block;
				padding:0px 10px;
			}

			.pagination a {
				color: #FFFFFF;
				float: left;
				padding: 8px 16px;
				text-decoration: none;
			}

			.pagination a.active {
				background-color: #FFFFFF;
				color: #FFFFFF;
			}

			.pagination a:hover:not(.active) {background-color: #576CBC;}
			
			a {
				text-decoration: none;
				color: white;
			}

			a:visited {
				text-decoration: none;
				color: white;
			}
		</style>
	</head>
<body>
<br>
<?php
require_once'koneksi.php';
$no = 1;
?>
<h2><font color="white">LAPORAN DATA BUKU</font></h2>
<br>
	<form method="post">
		<input type="text" name="nt" placeholder="Pencarian">
		<input type="submit" name="submit" value="Cari Data">
		<input type="button" onclick="location.href='lihat_data.php';" value="Tampilkan Semua"
	</form>
<br/>
<br/>
<div class = "container">
	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Barcode</th>
				<th>Nama</th>
				<th>Penulis</th>
				<th>Jenis</th>
				<th>Tahun Terbit</th>
				<th>Stok</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				$batas = 5;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($db,"select * from barang");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_barang = mysqli_query($db,"select * from barang limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_barang)){
					?>
					<tr>
						<td><?php echo $d['No']; ?></td>
						<td><?php echo $d['Barcode']; ?></td>
						<td><?php echo $d['Nama']; ?></td>
						<td><?php echo $d['Penulis']; ?></td>
						<td><?php echo $d['Jenis']; ?></td>
						<td><?php echo $d['Tahun']; ?></td>
						<td><?php echo $d['Stok'] ?></td>
					</tr>
					<?php
				}
				?>
			
<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE barcode LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
		<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE nama LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
		<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE penulis LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
		<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE jenis LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
		<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE tahun LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>
		
		<?php 
if (ISSET($_POST['submit'])){
	$cari = $_POST['nt'];
	$query2 = "SELECT * FROM barang WHERE stok LIKE '%$cari%'";
	$sql = mysqli_query($db, $query2);
	while ($r = mysqli_fetch_array($sql)){
	?>
		
			<script language="JavaScript">
			alert('Data ditemukan!');
			</script>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['Barcode']; ?></td>
				<td><?php echo $r['Nama']; ?></td>
				<td><?php echo $r['Penulis']; ?></td>
				<td><?php echo $r['Jenis']; ?></td>
				<td><?php echo $r['Tahun']; ?></td>
				<td><?php echo $r['Stok']; ?></td>
			</tr>
		<?php }} ?>

	</tbody>			
	</table>
		<nav>
			<ul class="pagination justify-content-center">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>&laquo;</a>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
					<?php
				}
				?>				
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>&raquo</a>
			</ul>
		</nav>
</div>		
<br>
	<tr height="46">
		<td> </td>
		<td> </td>
		<td>
			<input type="button" onclick="location.href='home.php';" value="Home"
		</td>
	</tr>
</br>
</body>
</html>