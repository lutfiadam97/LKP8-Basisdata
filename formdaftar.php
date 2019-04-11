<!DOCTYPE html>
<html>
<head>
	<title>New Student Registration | St. Freya Academy</title>
</head>

<body>
	<header>
		<h3>Registration of New Students Form</h3>
	</header>

	<form action="prosespendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Name: </label>
			<input type="text" name="nama" placeholder="Full Name" />
		</p>
		<p>
			<label for="alamat">Address: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Sex: </label>
			<label><input type="radio" name="jenis_kelamin" value="Male"> Male</label>
			<label><input type="radio" name="jenis_kelamin" value="Female"> Female</label>
		</p>
		<p>
			<label for="sekolah_asal">School From: </label>
			<input type="text" name="sekolah_asal"  />
		</p>
		<p>
			<input type="submit" value="Regist" name="daftar" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
