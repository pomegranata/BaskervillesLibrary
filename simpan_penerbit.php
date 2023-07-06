<?php
include "koneksi.php";

	$barcode		= $_POST["barcode"];
	$nama			= $_POST["nama"];
	$buku			= $_POST["buku"];
	$alamat			= $_POST["alamat"];
	$telepon		= $_POST["telepon"];


	if($barcode==""){
	?>
		<script language="JavaScript">
		alert('Isian barcode masih kosong. Silahkan diisi dahulu');
		document.location='isi-penerbit.php';
		</script>
	<?php
	}

	if($nama==""){
	?>
		<script language="JavaScript">
		alert('Isian nama masih kosong. Silahkan diisi dahulu');
		document.location='isi-penerbit.php';
		</script>
	<?php
	}
	
	if($buku==""){
	?>
		<script language="JavaScript">
		alert('Isian buku masih kosong. Silahkan diisi dahulu');
		document.location='isi-penerbit.php';
		</script>
	<?php
	}
	
	if($alamat==""){
	?>
		<script language="JavaScript">
		alert ('Isian alamat masih kosong. Silahkan diisi dahulu');
		document.location='isi-penerbit.php';
		</script>
	<?php
	}
	
	if($telepon==""){
	?>
		<script language="JavaScript">
		alert ('Isian telepon masih kosong. Silahkan diisi dahulu');
		document.location='isi-penerbit.php';
		</script>
	<?php
	}

	else{
		$pilih="select * from penerbit where barcode='$barcode'";
		$cek=mysqli_query($db,  $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1 ){
		?>
			<script language="JavaScript">
			alert('Barcode yang sama sudah digunakan');
			document.location='isi-penerbit.php';
			</script>
		<?php
		}
		
		else{ 
			$query="insert into penerbit (Barcode, Penerbit, Buku, Alamat, Telepon) values
				('$barcode','$nama','$buku','$alamat','$telepon')";
			$hasil=mysqli_query($db,$query);
			
			if ($hasil){
			?>
				<script language="JavaScript">
				alert('Proses Simpan Data Berhasil!');
				document.location='isi-penerbit.php';
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