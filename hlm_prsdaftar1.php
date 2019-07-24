<?php
include("koneksi.php");

if (isset($_POST['proses'])) {
	
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$gejala = $_POST['gejala'];
	$bpjs =  $_POST['bpjs'];

	$sql = "INSERT INTO daftar_klinik (pasien_nama, gejala_pasien, pasien_umur, pasien_alamat, nohp_pasien, pasien_bpjs) VALUE ('$nama','$umur','$alamat','$nohp','$gejala','$bpjs')" ;

	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: halaman_data1.php?status=sukses');
	}else{
		header('Location: halaman_data1?status=gagal');
	}
}
?>