<?php
if (isset($_POST['proses'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
echo $username;
if ($username == "admin" and $password = "admin") {
	session_start();
	header("location: halaman_data.php? login=sukses");
}else{
	header("location: halaman_data.php? login=gagal");
}
}

?>