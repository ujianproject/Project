<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 16px;
			background-color: #222;
			
		}
		#utama{
			width: 400px;
			margin: 0 auto;
			margin-top: 5%;
			 
		}
		#judul{
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: #006400;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
			border-bottom: 3px solid #336666;
		}
		#inputan{
			background-color: #ccc;
			padding: 20px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}
		#ulala{
			margin: 0 auto;
			background-color: #ccc;
			border-radius: 10px;
			
			font-size: 17px;
			width: 40%;
			margin-top: 50px; 
		}
		input{
			padding: 10px;
			border: 0;
		}
		.lg{
			width: 250px;
		}
		.btn{
			background-color: #339966;
			border-radius: 10px;
			color: #fff;
		}
		.btn:hover{
			background-color: #336666;
			cursor: pointer;
		}
		#gambar{
			margin: 0 auto;
			text-align: center;
		}

	</style>
</head>
<body>
	
	<div id="ulala">
	</div>
	<div id="utama">
		<div id="judul">
			PAGE LOGIN
		</div>
<center>
		<div id="inputan">
			<form action="proses_login.php" method="POST">
				<div>
					<input type="text" name="username" placeholder="Username" class="lg"required>
				</div>
				<div style="margin-top : 10px;">
					<input type="password" name="password" placeholder="Password" class="lg"required>
				</div>
			<center>
				<div style="margin-top : 10px;">
					<input type="submit" value="LOGIN" name = "proses">
				</div>
				</center>
			</form>
		</div>
	</div>
	</center>
</body>
</html>

