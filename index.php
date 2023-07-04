<!DOCTYPE html>
<html>
	<head>
		<title>Baskervilles' Library</title>
		<style type="text/css">
			* {
			margin: 0;
			padding: 0;
			outline: 0;
		}
		body {
			height: 100vh;
			background-color: #0B2447;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
		p {
			color: #171717;
			padding-top: 10px;
		}
		h1 {
			text-align: center;
			padding-bottom: 20px;
		}

		a {
			color: #752BEA;
		}
		.container {
			border-radius: 15px;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			padding: 20px 25px;
			width: 300px;
			background-color: #ffffff;
			box-shadow: 0 0 10px #ffffff;
		}
		.container h1 {
			text-align: center; 
			color: #1d1d1d;
			margin-bottom: 30px;
			border-bottom: 2px solid #0B2447;
		}
		.container h2 {
			text-align: center; 
			color: #1d1d1d;
			margin-bottom: 15px;
		}
		.container label {
			text-align: left;
			color: #1d1d1d;
		}
		.container form input {
			width: calc(100% - 20px);
			padding: 8px 10px;
			margin-bottom: 15px;
			border: none;
			background-color: transparent;
			border-bottom: 1px solid #1d1d1d;
			color: #1d1d1d;
			font-size: 20px;
		}
		.container form button {
			width: 100%;
			height: 40px;
			padding: 5px 0;
			border: none;
			background-color: #19376D;
			font-size: 18px;
			color: #fafafa;
			border-radius: 15px;
		}
		a {
			text-decoration: none;
			color: white;
		}

		a:visited {
			text-decoration: none;
			color: white;
		}
	</style>
	</head>
	<body>
		<div class="container">
			<h2>Welcome to</h2>
			<h1>Baskervilles' Library</h1>
				<form name="form-login" method="POST" action="login.php">
					<table width="310" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="106" height="16"></td>
							<td width="180"></td>
						</tr>
						<tr>
							<td height="18" align="center">Username	: </td>
							<td><input type="text" name="orang" size="20" maxlength="9"></td>
						</tr>
						<tr>
							<td height="18" align="center">Password : </td>
							<td><input type="password" name="sandi" size="20"></td>
						</tr>
						
						<tr>
							<td height="16"></td>
							<td></td>
						</tr>
						<tr>
						
						
						</tr>
					</table>
						<button>Login</button>
					<p>
						<button><a href="daftar.php">Sign In</a></button>
					</p>
				</form>
		</div>
	</body>
</html>