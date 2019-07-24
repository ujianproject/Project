<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		$main: #1ab188;

		html{
			overflow-y:scroll; 
		}
		body{
			margin: 0;
			padding: 0;
			background: #ccc;
		}

		.nav ul{
			list-style: none;
			background: #006400;
			text-align: center;
			padding: 0;
			margin: 0;
		}

		.nav li {
			display: inline-block;
		}

		.nav a{
			text-decoration:none;
			color: #fff;
			width: 100px;
			display: block;
			padding: 19px;
			font-size: 17px;
			font-family: Helvetica;
		}

		.nav a:hover{
			background: #000;
			transition: 0.4s;
		}

		h1{	
			text-align: center;
			/*ketebalan font*/
			font-weight: 300;
			font-family: Helvetica;	
		}

		.tulisan_login{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}

		.kotak_login{
			width: 350px;
			background: #E6E6FA;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
			border-radius: 10px;
		}

		label{
			font-size: 11pt;
		}

		.form_login{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
			border-radius: ;
		}

		.tombol_login{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 40px;
			padding: 10px 20px;
		}

		.link{
			color: #46de4b;
			text-decoration: none;
			font-size: 10pt;
		}
		.judul{
			font-family: ;
			font-size:;
			background-color: #228B22;
			border-radius: 20px; 
			font-color: #228B22;
		}
		.kembali{
			background: #46de4b;
		}

		#utama{
			width: 350px;
			margin: 0 auto;
			margin-top: 5%;
			background-color: #000; 
		}
		#judul{
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: #336666;
			
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

		.hias{
			border-color: : 4px;
		}

		.req {
  			margin:2px;
  			color: $main;
  		}

  		.field-wrap {
  			position:relative;
  			margin-bottom:40px;
		}
		.tabel{
			border-radius: 10px;
			font-family: arial;
			font-color: #00008B;
		}

		.space{
			margin-bottom: : 100px;
		}
	</style>
</head>
<body>
	<div class = "nav">
		<ul>
			<li><a href="klinik.php">Home</a></li>
      		<li><a href="#">Info Dokter</a></li>
      		<li><a href="halaman_data1.php">Daftar Pasien</a></li>
      		<li><a href="form_pendaftran1.php">Pendaftaran</a></li>
		</ul>
	</div>

	<?php
	include("koneksi.php")
	?>
	<center>
		<table width="600" border="6" cellpadding="13" cellspacing="0" class="tabel">
			<br><br><br>
			<h1 class="space">Berikut adalah Daftar Pasien yang Telah Mendaftar</h1>
			<tr>
				<th>No Antrian</th>
				<th>Nama Pasien</th>				
				<th>Asuransi Kesehatan</th>
				
			</tr>

			<?php
				$i = 0;
				$query = mysqli_query($db, "SELECT pasien_nama, pasien_bpjs FROM daftar_klinik");
				while ($m = mysqli_fetch_array($query)) {
					$i++;
					?>
					<tr>
						<td align="center"><?php echo $i; ?></td>
						<td><?php echo $m['pasien_nama']; ?></td>
						<td><?php echo $m['pasien_bpjs']; ?></td>		
					</tr>
				<?php } ?>
		</table>
	</center>
</body>
</html>