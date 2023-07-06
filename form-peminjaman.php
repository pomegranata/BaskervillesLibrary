<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
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

		.form-row input[type="text"],
		.form-row input[type="date"] {
			flex: 1;
		}

		.form-row .input-container {
			width: 200px;
		}

		.form-row .input-container input[type="text"],
		.form-row .input-container input[type="date"] {
			width: 100%;
		}
	</style>
</head>
<body>
	<div style="border:0; padding:10px; width:760px; height:auto;">
		<form method="post" action="proses-peminjaman.php">
			<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr height="46">
					<div class="top">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="White" size="6">Peminjaman Buku</font></td>
					</div>
				</tr>
				<tr>
					<td colspan="3">
						<div class="form-container">
							<div class="col-md-6">
								<div class="form-row">
									<label for="nama">Nama Peminjam:</label>
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
								<div class="form-row">
									<label for="penulis">Penulis:</label>
									<div class="input-container">
										<input type="text" name="penulis" id="penulis" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label for="penerbit">Penerbit:</label>
									<div class="input-container">
										<input type="text" name="penerbit" id="penerbit" required>
									</div>
								</div>
								<div class="form-row">
									<label for="tanggal">Tanggal Pinjam:</label>
									<div class="input-container">
										<input type="date" name="tanggal" id="tanggal" required>
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
						<button type="submit" name="submit">Pinjam</button>
						<button type="reset" name="Reset">Reset</button>
						<button type="button" onclick="location.href='home.php';">Home</button>
						<button type="button" onclick="location.href='katalog.php';">Katalog</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
