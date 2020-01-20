<?php
# Koneksi ke database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'db_otentikasi';

$db = new mysqli($db_host, $db_user, $db_pass, $db_otentikasi);
if ($db->connect_errno == true) {
	die('Database tidak mau konek');
}

$nama_lengkap 	= $_POST['nama_lengkap'];
$ttl 			= $_POST['ttl'];
$no_telepon 	= $_POST['no_telepon'];
$email 			= $_POST['email'];
$password 		= password_hash($_POST['password'], PASSWORD_DEFAULT);
$username 		= $_POST['username'];

# Memasukan data user ke datalam tabel tb_user
$sql = "INSERT INTO tb_user (nama_lengkap, ttl, no_telepon, email, password, username) VALUES ('".$nama_lengkap."', '".$ttl."', '".$no_telepon."', '".$email."', '".$password."','".$username."')";
$query = $db->query($sql);

if ($query) {
	echo 'Data berhasil di inputkan kedalam database! . <a href="../index.php" title="Back Home">Back Home</a>';
} else {
	echo "Data gagal dinputkan kedalam database!";
}