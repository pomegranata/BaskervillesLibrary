<!DOCTYPE html>
<html>
	<head>
		<title>Jenis Buku</title>
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

<h2><font color="white">LAPORAN JENIS BUKU</h2>
<br>
<br/>
<br/>

<?php

$query = "SELECT no, jenis FROM satuan";
$result = mysqli_query($db, $query);

class PDF extends TCPDF
{
    public function Header()
    {
        
        $this->SetFont('Courier', 'B', 12);

        $header = array('No', 'Jenis');

        $this->DrawHeaderRow($header);

        $this->SetFont('Courier', '', 12);
    }
	
	public function DrawHeaderRow($header)
    {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(0, 0, 0); 

        $columnWidths = array(10, 50);

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
    $kolom1 = $row['jenis'];

    
    $pdf->Cell(10, 10, $kolom0, 1);
	$pdf->Cell(50, 10, $kolom1, 1);

    
    $pdf->Ln();
}


$pdf->Output(__DIR__ . '/laporan/jenis/daftar-jenis-buku.pdf', 'F');
?>
	</br>
		<button onclick="location.href='home.php';" type = "button"> Home </button> <button onclick = "location.href='laporan/jenis/daftar-jenis-buku.pdf'" type = "button"> PDF </button>
	</br>
</body>
</html>