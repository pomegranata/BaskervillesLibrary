<!DOCTYPE html>
<html>
	<head>
		<title>Data Buku</title>
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
			thead 		{
							background-color: #576CBC;
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
<br>
<h2><font color="white">LAPORAN BUKU</font></h2>
<br>
<br/>
<br/>
<div class = "container">
	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>Daftar Buku</th>
				<th>Daftar Jenis Buku</th>
				<th>Daftar Penerbit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><center><button onclick="location.href='laporan-buku.php';" type = "button"> PDF </button></center></td>
				<td><center><button onclick="location.href='laporan-jenis.php';" type = "button"> PDF </button></center></td>
				<td><center><button onclick="location.href='laporan-penerbit.php';" type = "button"> PDF </button></center></td>
			</tr>
		</tbody>			
	</table>			
</div>		
	<br>
		<tr height="46">
			<td> </td>
			<td> </td>
			<td>
				<td><button onclick="location.href='home.php';" type = "button"> Home </button></td>
			</td>
		</tr>
	</br>
</body>
</html>