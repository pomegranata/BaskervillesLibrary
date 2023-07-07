<!DOCTYPE html>
<html>
	<head>
		<title>Penerbit</title>
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

<?php
include "koneksi.php";
require_once('TCPDF-6.4.1/tcpdf.php');

?>

<h2><font color="white">LAPORAN PENERBIT BUKU</h2>
<br>
<br/>
<br/>

<?php

$query = "SELECT no, barcode, penerbit, buku, alamat, telepon FROM penerbit";
$result = mysqli_query($db, $query);

class PDF extends TCPDF
{
    public function Header()
    {
        
        $this->SetFont('Courier', 'B', 12);

        $header = array('No', 'Barcode', 'Penerbit', 'Buku', 'Alamat', 'Kontak');

        $this->DrawHeaderRow($header);

        $this->SetFont('Courier', '', 12);
    }
	
	public function DrawHeaderRow($header)
    {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(0, 0, 0); 

        $columnWidths = array(10, 20, 35, 65, 100, 45);

		$lineWidths = array(0.2, 0.2, 0.2);

        foreach ($header as $key => $col) {
            $this->Cell($columnWidths[$key], 10, $col, 1, 0, 'C', true);
        }
		
        $this->Ln();
    }
}


$pdf = new PDF('L', 'mm', 'A4', true, 'UTF-8', false);

$pdf->AddPage();

$pdf->SetFont('Courier', '', 12);

while ($row = mysqli_fetch_assoc($result)) {
	
	$kolom0 = $row['no'];
    $kolom1 = $row['barcode'];
    $kolom2 = $row['penerbit'];
    $kolom3 = substr($row['buku'], 0, 25);
	$kolom4 = substr($row['alamat'], 0, 35);
	$kolom5 = $row['telepon'];

    
    $pdf->Cell(10, 10, $kolom0, 1);
	$pdf->Cell(20, 10, $kolom1, 1);
    $pdf->Cell(35, 10, $kolom2, 1);
    $pdf->Cell(65, 10, $kolom3, 1);
	$pdf->Cell(100, 10, $kolom4, 1);
	$pdf->Cell(45, 10, $kolom5, 1);

    
    $pdf->Ln();
}


$pdf->Output(__DIR__ . '/laporan/penerbit/daftar_penerbit.pdf', 'F');
?>
	</br>
		<button onclick="location.href='home.php';" type = "button"> Home </button>
		<button onclick = "location.href='laporan/penerbit/daftar_penerbit.pdf'" type = "button"> PDF </button>
	</br>
</body>
</html>