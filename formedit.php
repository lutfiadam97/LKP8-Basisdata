<!DOCTYPE html>
<html>
<head>
	<title>Edit Form | St. Freya Academy</title>
</head>
	<?php
	include ("config.php");
	$id = $_GET['id'];
	$query = mysqli_query($db, "SELECT * FROM calonsiswa WHERE id = '$id'");
	while ($result = mysqli_fetch_array($query)) {
	
	?>
<body>
	<header>
		<h3>Edit</h3>
	</header>

	<form action="prosesedit1.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Name: </label>
			<input type="hidden" name="id" value="<?php echo $result['id']?>" >
			<input type="text" name="nama" placeholder="Full Name" value="<?php echo $result['nama']?>" />
		</p>
		<p>
			<label for="alamat">Address: </label>
			<textarea name="alamat" value="<?php echo $result['alamat'] ?>"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Sex: </label>
			<label><input type="radio" name="jenis_kelamin" value="Male"<?php $result['jenis_kelamin'] == 'Male' ? print "selected" : "" ?> > Male</label>
			<label><input type="radio" name="jenis_kelamin" value="Female"<?php $result['jenis_kelamin'] == 'Female' ? print "selected" : "" ?> > Female</label>
		</p>
		<p>
			<label for="sekolah_asal">School From: </label>
			<input type="text" name="sekolah_asal" value="<?php echo $result['sekolah_asal'] ?>" />
		</p>
		<p>
			<input type="submit" value="Edit" name="edit" />
		</p>
		</fieldset>
	</form>
	<?php
	}
	?>


</body>
</html>
