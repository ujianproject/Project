<?php
	//panggil koneksi
include("koneksi.php");
$id = $_GET['no'];

if (!empty($id)) {
	mysqli_query($db, "DELETE  FROM klinik WHERE no='$id'");
	header('location: halaman_data.php?status=sukses');
	# code...
}else{
	header('location: halaman_data.php?status=gagal');
}
?>