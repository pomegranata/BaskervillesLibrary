<!DOCTYPE html>
<html>
	<head>
		<title>Peminjaman</title>
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

<?php
include "koneksi.php";
require_once('TCPDF-6.4.1/tcpdf.php');

?>

<h2><font color="white">LAPORAN PEMINJAMAN</h2>
<br>
<br/>
<br/>

<?php
$nama 		= $_POST['nama'];
$barang 	= $_POST['barang'];
$penulis	= $_POST['penulis'];
$penerbit 	= $_POST['penerbit'];
$peminjaman = $_POST['tanggal'];

$sql = "SELECT * FROM barang WHERE nama = '$barang'";
$result = $db->query($sql);

?>

<?php
if ($result->num_rows > 0) {
    
    $pengembalian = date('Y-m-d', strtotime($peminjaman . ' + 3 days'));


    $pdf = new TCPDF();
    $pdf->SetCreator('Peminjaman Buku');
    $pdf->SetAuthor("Baskervilles' Library");
    $pdf->SetTitle('Data Peminjaman Buku');
    $pdf->SetSubject('Data Peminjaman Buku');
    $pdf->SetKeywords('Data, Peminjaman, Buku');

    
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

    $pdf->Output(__DIR__ . '/invoices/Peminjaman.pdf', 'F');
?>

<div class = "container">
	<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Nama Peminjam</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Penerbit</th>
					<th>Pinjam</th>
					<th>Kembali</th>
				</tr>
			</thead>
			<tbody>
			
				
				<tr>
					<td><?php echo $nama; ?></td>
					<td><?php echo $barang; ?></td>
					<td><?php echo $penulis; ?></td>
					<td><?php echo $penerbit; ?></td>
					<td><?php echo $peminjaman; ?></td>
					<td><?php echo $pengembalian; ?></td>
				</tr>
			
			</tbody>
		</table>
</div>
	<br>
		<button onclick = "location.href='invoices/Peminjaman.pdf'" type = "button"> PDF </button>
	</br>
	<?php
		}

	else {
		echo "Judul buku tidak ditemukan dalam database.";
		exit;
} ?>

</body>
</html>
