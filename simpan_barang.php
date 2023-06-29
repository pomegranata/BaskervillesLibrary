<?php
include "koneksi.php";
	
	$barcode		= $_POST["barcode"];
	$nama			= $_POST["nama"];
	$penulis		= $_POST["penulis"];
	$jenis			= $_POST["jenis"];
	$tahun			= $_POST["tahun"];
	$stok			= $_POST["stok"];

	if($barcode=="") {
?>
		<script language="JavaScript">
		alert('Isian barcode masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}

	if($nama==""){
	?>
		<script language="JavaScript">
		alert('Isian Nama masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}
	if($penulis==""){
	?>
		<script language="JavaScript">
		alert ('Isian penulis masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}
	if($jenis==""){
	?>
		<script language="JavaScript">
		alert ('Isian jenis masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}
	if($tahun==""){
	?>
		<script language="JavaScript">
		alert ('Isian tahun barang masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}
	if($stok==""){
	?>
		<script language="JavaScript">
		alert ('Isian stok barang masih kosong. Silahkan diisi dahulu');
		document.location='isi-barang.php';
		</script>
	<?php
	}

	else {
		
		$pilih="select * from barang where barcode='$barcode'";
		$cek=mysqli_query($db,  $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1 ){
		?>
			<script language="JavaScript">
			alert('Barcode yang sama sudah digunakan');
			document.location='isi-barang.php';
			</script>
		<?php
		}
		
		else { 
			
			$query="insert into barang (Barcode,Nama, Penulis, Jenis, Tahun,Stok) values
				('$barcode','$nama','$penulis','$jenis', '$tahun','$stok')";
				
			$hasil=mysqli_query($db,$query);
			
			if ($hasil){
			?>
					<script language="JavaScript">
					alert('Proses Simpan Data Berhasil!');
					document.location='isi-barang.php';
					</script>
			<?php
					exit;
			}
			else{
				echo "Gagal insert data";
				exit;
			}
		}
	}
?>