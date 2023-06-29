<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		include ("login.php");
		$user = $_POST['orang'];
	}
	
	else {
		?>
		<!DOCTYPE html>
		<html>
			<head>
			<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Baskervilles Store</title>
				<style type="text/css">
					body{
						padding: 0;
						margin: 0;
						font-family: sans-serif;
						background-color: #0B2447;
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
			</style>
			</head>
		<body>
		<header class="header">
			<div class="menu-dropmenu">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li class="dropdown"><a href="#">Data Master</a>
						<ul class="isi-dropdown">
							<li><a href="isi-barang.php?p=Master Satuan Barang">Buku</a></li>
							<li><a href="isi-satuan.php?p=Master Satuan Barang">Jenis </a></li>
							<li><a href="isi-supplier.php?p=Master Supplier Barang">Penerbit</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#">Data Transaksi</a>
						<ul class="isi-dropdown">
							<li><a href="form-peminjaman.php">Peminjaman Buku</a></li>
							<li><a href="peminjaman.php">Riwayat Peminjaman</a></li>
							<li><a href="#">Laporan Riwayat Peminjaman</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#">Data Laporan</a>
						<ul class="isi-dropdown">
							<li><a href="lihat_data.php">Daftar Buku</a></li>
							<li><a href="lihat_satuan.php">Daftar Jenis Buku</a></li>
							<li><a href="lihat_supplier.php">Daftar Penerbit Buku</a></li>
							<li><a href="#">Laporan</a></li>
						</ul>
					</li>
					<li><a href="#">Kontak</a></li>
					<li><a href="log-out.php">Log Out</a></li>
				</ul>
			</div>
		</header>
		<br/>
		<center>
			<h2><font color="white">Welcome To<br/></font></h2>
			<h1><font color="white">Baskervilles' Library<br/></font></h1>
		</center>
		</body>
		</html>
	<?php
	}
?>