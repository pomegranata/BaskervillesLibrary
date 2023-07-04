<!DOCTYPE html>
<html>
	<head>
		<title>Invoice</title>
		<style type="text/css">
			body {
				background-color: #0B2447;
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
$barang 	= $_POST['barang'];
$penulis	= $_POST['penulis'];
$penerbit 	= $_POST['penerbit'];
$peminjaman = $_POST['tanggal'];

$pengembalian = date('Y-m-d', strtotime($peminjaman . ' + 3 days'));

$sql_check = "SELECT * FROM barang WHERE nama = '$barang'";
	$result_check = $db->query($sql_check);

	if ($result_check->num_rows > 0) {
		
		
		$sql_insert = "INSERT INTO peminjaman (nama, judul, penulis, penerbit, pinjam, kembali) VALUES 
		('$nama', '$barang', '$penulis', '$penerbit', '$peminjaman', '$pengembalian')";
		
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
$pdf->Cell(0, 10, "Judul				: $barang", 0, 1);
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
