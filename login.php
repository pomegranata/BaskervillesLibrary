<?php
	ob_start();
	session_start();
		$user		= $_POST['orang'];
		$password	= $_POST['sandi'];
		$_SESSION['orang'] = $user;
			$Open = mysqli_connect("localhost", "root", "");
				if (!$Open) {
					die ("Koneksi ke MySQL Gagal !");
				}
				
			$Koneksi = mysqli_select_db($Open, "ta");
				if (!$Koneksi) {
					die ("Koneksi ke Database Gagal !");
				}
				
			$sql = "SELECT * FROM t_user where username='$user'";			
			$qry = mysqli_query($Open, $sql);
			$num = mysqli_num_rows ($qry);
			$row = mysqli_fetch_array ($qry);

			if ($num == 0 OR $password != $row['password'])
			{
				?>
					<script language="JavaScript">
						alert('Username atau Password tidak terdaftar');
						document.location='index.php';
					</script>
				<?php
			}

			else
			{
				$_SESSION['login'] =1;
				header("Location: home.php");
			}
			
	mysqli_close($Open);
?>
