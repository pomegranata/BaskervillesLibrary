<!DOCTYPE html>
<html>
	<head>
		<title>Invoice</title>
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
		
		button {
			color: #FFFFFF;
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
<h2><font color="white">INVOICE</h2>
<br>
<br/>
<br/>
<?php
include "koneksi.php"

?>

<?php

$nama 		= $_POST['nama'];
$buku 		= $_POST['buku'];
$penulis	= $_POST['penulis'];
$penerbit 	= $_POST['penerbit'];
$peminjaman = $_POST['tanggal'];

$pengembalian = date('Y-m-d', strtotime($peminjaman . ' + 3 days'));

$sql_check = "SELECT * FROM buku WHERE nama = '$buku'";
	$result_check = $db->query($sql_check);

	if ($result_check->num_rows > 0) {
		
		
		$sql_insert = "INSERT INTO peminjaman (nama, judul, penulis, penerbit, pinjam, kembali) VALUES 
		('$nama', '$buku', '$penulis', '$penerbit', '$peminjaman', '$pengembalian')";
		
		if ($db->query($sql_insert) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("Data berhasil disimpan!")';
			echo '</script>';
		} else {
			echo "Error: " . $sql_insert . "<br>" . $conn->error;
		}
	} else {

		echo "Judul buku tidak ditemukan dalam database.";
	}

require_once('TCPDF-6.4.1/tcpdf.php');

$pdf = new TCPDF();

$pdf->AddPage();

$pdf->SetFont('courier', 'B', 14);
$pdf->Cell(0, 10, 'Data Peminjaman Buku', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('courier', '', 12);
$pdf->Cell(0, 10, "Nama Peminjaman		: $nama", 0, 1);
$pdf->Cell(0, 10, "Judul				: $buku", 0, 1);
$pdf->Cell(0, 10, "Penulis				: $penulis", 0, 1);
$pdf->Cell(0, 10, "Penerbit				: $penerbit", 0, 1);
$pdf->Cell(0, 10, "Tanggal Peminjaman	: $peminjaman", 0, 1);
$pdf->Cell(0, 10, "Tanggal Pengembalian	: $pengembalian", 0, 1);

$pdf->Output(__DIR__ . '/invoices/invoice.pdf', 'F');

?>

</br>
	<button onclick="location.href='home.php';" type = "button"> Home </button>
	<button onclick = "location.href='invoices/invoice.pdf'" type = "button"> PDF </button>
</br>

</body>
</html>
