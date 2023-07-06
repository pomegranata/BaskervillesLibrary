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
				<title>Baskervilles' Library</title>
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
					main {
					  margin: 20px;
					  text-align: center;
					}
					
					center{
						margin: 20px;
						text-align: center;
						color: #ffffff;
					}

					button {
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
		<br/>
		<center>
			<h1>Selamat Datang di Baskervilles' Library</h1>
			<br></br>
			<p>Di sini, kami menghadirkan dunia pengetahuan yang luas dan mengundang Anda untuk mengeksplorasi koleksi kami yang kaya. 
			Silakan merajut kisah baru dan memperluas wawasan Anda melalui kata-kata dan cerita yang ada di rak buku kami. 
			<br></br>
			<p>Bersama-sama, mari kita nikmati petualangan intelektual yang tak terbatas dan menjelajahi dunia melalui halaman-halaman yang diisi dengan pengetahuan. 
			<br></br>
			<p>Selamat menikmati kunjungan Anda di perpustakaan kami yang ramah ini!</p>
			<br></br>
			<button type="button" onclick="location.href='form-peminjaman.php';" value="pinjam"> Pinjam Buku </button>
		</center>
		</body>
		</html>
	<?php
	}
?>