<html>
	<head>
		<title>Input Data Satuan Barang</title>
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
			<form action="simpan_satuan.php" method="POST">
				<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="46">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="white" size="6">Input Data Jenis Buku</font></td>
					<tr height="46">
						<td></td>
						<td><font size="3" color="white">Jenis</font></td>
						<td><input type="text" name="jenis" size="35" maxlength="30" /></td>
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