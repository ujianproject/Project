<?php
	//panggil koneksi
include("koneksi.php");
$id = $_GET['no'];
echo "$id";
// $sql = "DELETE FROM daftar_klinik WHERE no='$id'";
// echo "$sql";

if (!empty($id)) {
	mysqli_query($db, "DELETE FROM daftar_klinik WHERE no='$id'");
	header('location: halaman_data.php?status=sukses');
	# code...
}else{
	header('location: halaman_data.php?status=gagal');
}
?>