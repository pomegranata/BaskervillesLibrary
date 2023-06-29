<?php
	include "koneksi.php";
		$nama		= $_POST["orang"];
		$sandi		= $_POST["sandi"];

	if ($nama=="")
	{
		?>
			<script language="JavaScript">
			alert('Username masih kosong. Silahkan diisi dahulu');
			document.location='daftar.php';
			</script>
		<?php
	}

	if ($sandi=="")
	{
		?>
			<script language="JavaScript">
			alert('Password masih kosong. Silahkan diisi dahulu');
			document.location='daftar.php';
			</script>
		<?php
	}

	else
	{
		$pilih = "select * from t_user where username='$nama'";
		$cek = mysqli_query($db, $pilih);
		$jumlah_data = mysqli_num_rows($cek);
		
		if ($jumlah_data >= 1)
		{
			?>
				<script language="JavaScript">
				alert('Username yang sama sudah digunakan');
				document.location='daftar.php';
				</script>
			<?php
		}
		
		else
		{
			$query="insert into t_user (username, password) values ('$nama', '$sandi')";
			$hasil = mysqli_query($db, $query);
		
			if ($hasil)
			{
				?>
					<script language="JavaScript">
					alert('Akun berhasil dibuat!');
					document.location='daftar.php';
					</script>
				<?php
				exit;
			}

			else 
			{
				echo "Gagal membuat akun";
				exit;
			}
		}
	}
?>
