<!DOCTYPE html>
<html>
<head>
  <title>Informasi Kontak Developer</title>
   <style>
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
    
		h1 {
			margin: 20px;
			color: #FFFFFF;
		}
		
		h2 {
			margin: 20px;
			color: #FFFFFF;
		}
		
		p {
			margin: 20px;
			margin-bottom: 10px;
			color: #FFFFFF;
		}
		
		a {
			color: #007bff;
			text-decoration: none;
		}
		
		a:hover {
			text-decoration: underline;
		}
	
		button {
			margin: 20px;
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
  <h1>Informasi Kontak</h1>
  
  <br></br>
  <h2>Discord</h2>
  <p>Username: amimir#4991</p>
  
  <br></br>
  <h2>GitHub</h2>
  <p>Username: pomegranata</p>
  <p>Profile: <a href="https://github.com/pomegranata">https://github.com/pomegranata</a></p>
  
  <br></br>
  <h2>Instagram</h2>
  <p>Username: exicrs</p>
  <p>Profile: <a href="https://www.instagram.com/exicrs/">https://www.instagram.com/exicrs/</a></p>
  
  <br></br>
  <br></br>
  <button onclick="location.href='home.php';" type = "button"> Home </button>
</body>
</html>
