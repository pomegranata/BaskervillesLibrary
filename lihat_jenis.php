<!DOCTYPE html>
<html>
	<head>
		<title>Data Jenis Buku</title>
		<style type="text/css">
			body{
				padding: 0;
				margin: 0;
				font-family: Arial, sans-serif;
				background-color: #0B2447;
			}
			header{
				background-color:#19376D;
				color: #fff;
				padding: 10px;
				text-align: center;
			}
			.menu-dropmenu{
				background-color: #19376D;
			}
			
			.menu-dropmenu ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}
			
			.menu-dropmenu > ul > li {
				float: left;
			}
			
			.menu-dropmenu li a {
				display: inline-block;
				color: #ffffff;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}
			
			.menu-dropmenu li a:hover{
				background-color: #576CBC;
			}
			
			li.dropdown {
				display: inline-block;
			}
			
			.dropdown:hover .isi-dropdown {
				display: block;
			}
			
			.isi-dropdown a:hover {
				color: #19376D;
			}
			
			.isi-dropdown {
				position: absolute;
				display: none;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,2);
				z-index: 1;
				background-color: #19376D;
			}
			
			.isi-dropdown a {
				color: #ffffff;
			}
			
			.isi-dropdown a:hover {
				color: #ffffff ;
				background: #f3f3f3 ;
			}
			h2 {
				margin: 20px;
				color: #FFFFFF;
			}
			
			table,tr,td {
				color: #FFFFFF;
				border: 1px solid;
				border-color:#576CBC;
			}
						
			thead {
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
<header>
	<h1>Baskervilles' Library</h1>
</header>
	<nav class="header">
		<div class="menu-dropmenu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li class="dropdown"><a href="#">Data Master</a>
					<ul class="isi-dropdown">
						<li><a href="isi-buku.php?p=Master Data Buku">Buku</a></li>
						<li><a href="isi-jenis.php?p=Master Data Jenis Buku">Jenis </a></li>
						<li><a href="isi-penerbit.php?p=Master Data Penerbit">Penerbit</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#">Data Peminjaman Buku</a>
					<ul class="isi-dropdown">
						<li><a href="form-peminjaman.php">Peminjaman Buku</a></li>
						<li><a href="riwayat-peminjaman.php">Riwayat Peminjaman</a></li>
						<li><a href="laporan-riwayat.php">Laporan Riwayat Peminjaman</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#">Data Laporan</a>
					<ul class="isi-dropdown">
						<li><a href="lihat_data.php">Daftar Buku</a></li>
						<li><a href="lihat_jenis.php">Daftar Jenis Buku</a></li>
						<li><a href="lihat_penerbit.php">Daftar Penerbit Buku</a></li>
						<li><a href="laporan.php">Laporan</a></li>
					</ul>
				</li>
				<li><a href="kontak.php">Kontak</a></li>
				<li><a href="log-out.php">Log Out</a></li>
			</ul>
		</div>
	</nav>
<br>

<?php
	require_once'koneksi.php';
	$no = 1;

?>

<?php
	$batas = 5;
	$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
	$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

	$previous = $halaman - 1;
	$next = $halaman + 1;
	
	$data = mysqli_query($db,"select * from jenis");
	$jumlah_data = mysqli_num_rows($data);
	$total_halaman = ceil($jumlah_data / $batas);

	$data_buku = mysqli_query($db,"select * from jenis limit $halaman_awal, $batas");
	$nomor = $halaman_awal+1;
	
?>
<h2><font color="white">LAPORAN DATA JENIS BUKU</h2>
<br>
	<form method="post">
		<input type="text" name="nt" placeholder="Pencarian">
		<input type="submit" name="submit" value="Cari Data">
		<input type="button" onclick="location.href='lihat_jenis.php';" value="Tampilkan Semua"
	<form>
<br/>
<br/>
	<div class = "container">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Jenis Buku</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if (ISSET($_POST['submit'])) {
				$cari = $_POST['nt'];
				$query2 = "SELECT * FROM jenis WHERE jenis LIKE '%$cari%'";
				$sql = mysqli_query($db, $query2);
				while ($r = mysqli_fetch_array($sql)) {
			?>
					<script language="JavaScript">
						alert('Data ditemukan!');
					</script>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $r['Jenis']; ?></td>
					</tr>
			<?php
				}
			} else {
				while ($d = mysqli_fetch_array($data_buku)) {
			?>
					<tr>
						<td><?php echo $d['No']; ?></td>
						<td><?php echo $d['Jenis']; ?></td>
					</tr>
			<?php
				}
			}
			?>
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
			<td>
				<input type = "button" onclick="location.href='laporan-jenis.php';" value = "PDF"
			</td>
		</tr>
		</br>
</body>
</html>