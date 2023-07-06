<!DOCTYPE html>
<html>
<head>
    <title>Input Data Buku</title>
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
		
		table {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
		}

		input {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 14px;
			height: 30px;
		}

		button {
			background: #FFFFFF;
			border-radius: 999px;
			box-shadow: #5E5DF0 0 10px 20px -10px;
			box-sizing: border-box;
			color: #1d1d1d;
			font-family: Inter, Helvetica;
			font-size: 14px;
			font-weight: 600;
			padding: 8px 18px;
			margin-top: 50px;
		}
		.top {
			margin-bottom: 20px;
		}

		.form-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: flex-start;
			align-items: center;
			margin-top: 50px;
			margin-bottom: 20px;
		}

		.form-row {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
			flex-basis: 50%;
		}

		.form-row label {
			width: 150px;
			color: white;
			font-size: 14px;
			text-align: right;
			margin-right: 10px;
		}

		.form-row input[type="text"]
		{
			flex: 1;
		}

		.form-row .input-container {
			width: 200px;
		}

		.form-row .input-container input[type="text"]
		{
			width: 100%;
		}
		select {
			width: 208px;
			color: black;
			font-size: 14px;
			text-align: left;
			margin-right: 10px;
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
	<div style="border:0; padding:10px; width:760px; height:auto;">
		<form method="post" action="simpan_buku.php">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<div class="top">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="White" size="6">Input Data Buku</font></td>
					</div>
				</tr>
				<tr>
					<td colspan="3">
						<div class="form-container">
							<div class="col-md-6">
								<div class="form-row">
									<label for="barcode">Barcode:</label>
									<div class="input-container">
										<input type="text" name="barcode" id="barcode" required>
									</div>
								</div>
								<div class="form-row">
									<label for="nama">Judul:</label>
									<div class="input-container">
										<input type="text" name="nama" id="nama" required>
									</div>
								</div>
								<div class="form-row">
									<label for="penulis">Penulis:</label>
									<div class="input-container">
										<input type="text" name="penulis" id="penulis" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label for="jenis">Jenis Buku:</label>
									<div class="input-container">
										<input type="text" name="jenis" id="jenis" required>
									</div>
								</div>
								<div class="form-row">
									<label for="tahun">Tahun Terbit:</label>
									<div class="input-container">
										<input type="text" name="tahun" id="tahun" required>
									</div>
								</div>
								<div class="form-row">
									<label for="stok">Stok:</label>
									<div class="input-container">
										<input type="text" name="stok" id="stok" required>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				
				<tr height="46">
					<td></td>
					<td></td>
					<td>
						<button type="submit" name="submit">Submit</button>
						<button type="reset" name="Reset">Reset</button>
						<button type="button" onclick="location.href='home.php';">Home</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
