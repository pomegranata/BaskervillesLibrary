<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
	<style type = "text/css">
				body	{
					background-color: #0B2447;
				}

				table	{
					font-family: Verdana, Arial, Helvetica, sans-serif;
					font-size: 11px;
				}

				input	{
					font-family: Verdana, Arial, Helvetica, sans-serif;
					font-size: 14px;
					height: 30px;

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
<div style="border:0; padding:10px; width:760px; height:auto;">
    <form method="post" action="proses-peminjaman.php">
		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
				<td width="10%"></td>
				<td width="25%"></td>
				<td width="65%"><font color="White" size="6">Peminjaman Buku</font></td>
			</tr>
		<tr height="46">
			<td></td>
				<td><label for="barang"><font size="3" color="white">Nama Peminjam	: </font></label></td>
				<td><input type="text" name="nama" id="nama" required><br><br></td>
		</tr>
		<tr height="46">
			<td></td>
				<td><label for="barang"><font size="3" color="white">Judul			: </font></label></td>
				<td><input type="text" name="barang" id="barang" required><br><br></td>
		</tr>
		<tr height="46">
			<td></td>
				<td><label for="barang"><font size="3" color="white">Penulis		: </font></label></td>
				<td><input type="text" name="penulis" id="penulis" required><br><br></td>
		</tr>
		<tr height="46">
			<td></td>
				<td><label for="barang"><font size="3" color="white">Penerbit			: </font></label></td>
				<td><input type="text" name="penerbit" id="penerbit" required><br><br></td>
		</tr>
		<tr height="46">
			<td></td>
				<td><label for="jumlah"><font size="3" color="white">Tanggal Pinjam	: </font></label></td>
				<td><input type="date" name="tanggal" id="tanggal" required><br><br></td>
		</tr>
		<tr height="46">
				<td></td>
				<td></td>
				<td><button type="submit" name="submit"> Pinjam </button>
					<button type="reset" name="Reset"> Reset </button></td>
					<button type="button" onclick="location.href='home.php';" value="Home"> Home </button>
				</td>
		</tr>
		</table>
    </form>
	</div>
</body>
</html>