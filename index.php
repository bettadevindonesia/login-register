<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplikasi Registrasi dan Login PHP MySQL</title>
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
	
	<div class="container">
		<form action="actions/do_login.php" method="POST" autocomplete="off">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda..." required>
			</div>
			<div class="form-group">
				<label for="ttl">Tempat, Tanggal Tahun Lahir</label>
				<input type="text" name="ttl" placeholder="Masukkan Tempat, Tanggal Tahun Lahir Anda..." required>
			</div>
			<div class="form-group">
				<label for="no_telepon">Nomor Telepon</label>
				<input type="text" name="no_telepon" placeholder="Masukkan Nomor Telepon Anda..." required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Masukkan Email Anda..." required>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Masukkan Username Anda..." required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Masukkan Password Anda..." required>
			</div>
			<button type="submit" class="btn-register">Daftar Sekarang</button>
			<p>Sudah punya akun? <a href="login.php" title="Login">Login</a></p>
		</form>
	</div>

	<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>