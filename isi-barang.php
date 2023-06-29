<html>
	<head>
		<title>Input Data Barang</title>
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
		<form action="simpan_barang.php" method="POST">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<td width="10%"></td>
					<td width="25%"></td>
					<td width="65%"><font color="White" size="6">Input Data Buku</font></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3" color="white">Barcode</font></td>
					<td><input type="text" name="barcode" size="35" maxlength="6" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3" color="white">Judul</font></td>
					<td><input type="text" name="nama" size="35" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3" color="white">Penulis</font></td>
					<td><input type="text" name="penulis" size="35" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3" color="white">Jenis</font></td>
					<td><select name="jenis">
						<option value="Novel">Novel
						<option value="Kamus">Kamus
						<option value="Majalah">Majalah
						<option value="Ensiklopedia">Ensiklopedia
						<option value="Biografi">Biografi
					</select></td>
				</tr>
				<tr height="46">
					<td></td>
					<td><font size="3" color="white">Tahun Terbit</font></td>
					<td><input type="text" name="tahun" size="35" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td> </td>
					<td><font size="3" color="white">Stok</font></td>
					<td><input type="text" name="stok" size="35" maxlength="30" /></td>
				</tr>
				<tr height="46">
					<td></td>
					<td></td>
					<td><button type="submit" name="Submit" value="Simpan"> Simpan </button>
						<button type="reset" name="Reset" value="Batal"> Reset </button></td>
						<button type="button" onclick="location.href='home.php';" value="Home"> Home </button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>