<!DOCTYPE html>
<html>
	<head>
		<title>Data Buku</title>
		<style type="text/css">
			body		{
							background-color: #0B2447;
						}
			table,tr,td {
							color: #FFFFFF;
							border: 1px solid;
							border-color:#576CBC;
						}
			thead 		{
							background-color: #576CBC;
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
<br>
<h2><font color="white">LAPORAN BUKU</font></h2>
<br>
<br/>
<br/>
<div class = "container">
	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>Daftar Buku</th>
				<th>Daftar Jenis Buku</th>
				<th>Daftar Penerbit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><center><button onclick="location.href='laporan-buku.php';" type = "button"> PDF </button></center></td>
				<td><center><button onclick="location.href='laporan-jenis.php';" type = "button"> PDF </button></center></td>
				<td><center><button onclick="location.href='laporan-penerbit.php';" type = "button"> PDF </button></center></td>
			</tr>
		</tbody>			
	</table>			
</div>		
	<br>
		<tr height="46">
			<td> </td>
			<td> </td>
			<td>
				<td><button onclick="location.href='home.php';" type = "button"> Home </button></td>
			</td>
		</tr>
	</br>
</body>
</html>