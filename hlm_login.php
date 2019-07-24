<html>
<head>
	<style type="text/css">
	.rapi
	{
		width : 40%;
		margin : 2 auto;
		text-align : center;
	}
	body
	{
		color : black;
	}
	fieldset
	{
		background-image : linear-gradient(#7fff00,#ffffff);
	}
	table
	{
		margin : 0 auto;
	}
	input
	{
		padding : 4px;
		border : 2px solid lightblue;
		background-color : aliceblue;
	}
	input[type=submit]
	{
		font-size : 16px;
		background-image : linear-gradient(#ccffff);
		padding : 6px 16px;
	}
	input:focus
	{
		background-color : black;
	}
	select
	{
		padding : 4px;
		border : 2px solid lightblue;
		box-sizing: border-box;
		background-color: aliceblue;
	}
	textarea
	{
		border : 2px solid lightblue;
		box-sizing: border-box;
		color : gray;
		background-color: aliceblue;
	}

	.tulisan{
		font-family: Helvetica;
		font-color: #0000;
	}
	</style>
</head>
<body>
	<fieldset class="rapi">
	<title>Pendaftaran</title>
</head>

<body>
	
	<h1 class="tulisan">Login Administator</h1>
	<form action="andreriskia_Registrasi2.php" method="POST">
		<table border="0" style="center">

			<tr>
				<td class="tulisan">Username</td>
				<td>:</td>
				<td><input type="text" name="depan"></td>
			</tr>

			<tr>
				<td class="tulisan">Password</td>
				<td>:</td>
				<td><input type="password" name="belakang"></td>
			</tr>

			
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value="Login"/></td>
							
						</tr>

					</table>
				</form>
			</body>
			</html> 