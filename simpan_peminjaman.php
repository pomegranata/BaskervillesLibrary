<?php
	include "koneksi.php";

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
			?>
			<script language="JavaScript">
				alert('Proses Simpan Data Berhasil!');
				document.location='form-peminjaman.php';
			</script>
			<?php
		} else {
			echo "Error: " . $sql_insert . "<br>" . $conn->error;
		}
	} else {

		echo "Judul buku tidak ditemukan dalam database.";
	}
?>