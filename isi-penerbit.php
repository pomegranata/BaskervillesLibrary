<!DOCTYPE html>
<html>
<head>
    <title>Input Data Penerbit Buku</title>
	<style type="text/css">
		body {
			background-color: #0B2447;
		}

		table {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
		}

		input {
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
			font-family: Inter, Helvetica;
			font-size: 14px;
			font-weight: 600;
			padding: 8px 18px;
			margin-top: 50px;
		}
		.top {
			margin-bottom: 20px;
		}

		.form-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: flex-start;
			align-items: center;
			margin-top: 50px;
			margin-bottom: 20px;
		}

		.form-row {
			display: flex;
			align-items: center;
			margin-bottom: 10px;
			flex-basis: 50%;
		}

		.form-row label {
			width: 150px;
			color: white;
			font-size: 14px;
			text-align: right;
			margin-right: 10px;
		}

		.form-row input[type="text"]
		{
			flex: 1;
		}

		.form-row .input-container {
			width: 200px;
		}

		.form-row .input-container input[type="text"]
		{
			width: 100%;
		}

	</style>
</head>
<body>
	<div style="border:0; padding:10px; width:760px; height:auto;">
		<form method="post" action="simpan_penerbit.php">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<div class="top">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="White" size="6">Input Data Penerbit Buku</font></td>
					</div>
				</tr>
				<tr>
					<td colspan="3">
						<div class="form-container">
							<div class="col-md-6">
								<div class="form-row">
									<label for="barcode">Barcode:</label>
									<div class="input-container">
										<input type="text" name="barcode" id="barcode" required>
									</div>
								</div>
								<div class="form-row">
									<label for="nama">Penerbit:</label>
									<div class="input-container">
										<input type="text" name="nama" id="nama" required>
									</div>
								</div>
								<div class="form-row">
									<label for="buku">Judul:</label>
									<div class="input-container">
										<input type="text" name="buku" id="buku" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label for="alamat">Alamat:</label>
									<div class="input-container">
										<input type="text" name="alamat" id="alamat" required>
									</div>
								</div>
								<div class="form-row">
									<label for="telepon">Telepon:</label>
									<div class="input-container">
										<input type="text" name="telepon" id="telepon" required>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				
				<tr height="46">
					<td></td>
					<td></td>
					<td>
						<button type="submit" name="submit">Submit</button>
						<button type="reset" name="Reset">Reset</button>
						<button type="button" onclick="location.href='home.php';">Home</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
