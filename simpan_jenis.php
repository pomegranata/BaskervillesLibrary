<?php
include "koneksi.php";

	$jenis			= $_POST["jenis"];

	
	if($jenis==""){
?>
		<script language="JavaScript">
		alert ('Isian jenis buku masih kosong. Silahkan diisi dahulu');
		document.location='isi-jenis.php';
		</script>
	<?php
	}

	else{
		$pilih="select * from jenis where Jenis ='$jenis'";
		$cek=mysqli_query($db,  $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1 ){
	?>
			<script language="JavaScript">
			alert('Jenis buku yang sama sudah digunakan');
			document.location='isi-jenis.php';
			</script>
		<?php
		}
		
		else{ 
			$query="insert into jenis (Jenis) values
				('$jenis')";
				
			$hasil=mysqli_query($db,$query);

			if ($hasil){
		?>
				<script language="JavaScript">
				alert('Proses Simpan Data Berhasil!');
				document.location='isi-jenis.php';
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