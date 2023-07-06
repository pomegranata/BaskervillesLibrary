<!DOCTYPE html>
<html>
	<head>
		<title>Jenis Buku</title>
		<style type="text/css">
			body {
				background-color: #0B2447;
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
			</style>
	</head>
<body>
<br>

<?php
	include "koneksi.php";
	require_once('TCPDF-6.4.1/tcpdf.php');

?>

<h2><font color="white">LAPORAN PEMINJAMAN BUKU</h2>
<br>
<br/>
<br/

<?php
	
	function createPDF($nama, $buku, $penulis, $penerbit, $peminjaman, $pengembalian) {
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('times', '', 12);
    $pdf->MultiCell(0, 10, "Name: $name");
    $pdf->MultiCell(0, 10, "Email: $email");
    $pdf->MultiCell(0, 10, "Message: $message");

    return $pdf;
}

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
			echo 'alert("message successfully sent")';
			echo '</script>';
		} else {
			echo "Error: " . $sql_insert . "<br>" . $conn->error;
		}
	} else {

		echo "Judul buku tidak ditemukan dalam database.";
	}
	
	$outputPath = '/invoices/invoice.pdf'; // Sesuaikan dengan lokasi dan nama file output yang diinginkan
	$pdf->Output($outputPath, 'F'); // Mode F untuk menyimpan ke file
	
	header('Location: ' . $outputPath);
	
?>

	</br>
		<input type="button" onclick="location.href='home.php';" value="Home">
		<input type="button" onclick="location.href='invoices/invoice.pdf';" value = "PDF">
	</br>
</body>
</html>