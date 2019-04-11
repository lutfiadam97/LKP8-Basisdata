<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>New Student Registration | St. Freya Academy</title>
</head>

<body>
	<header>
		<h3>Students List</h3>
	</header>

	<nav>
		<a href="formdaftar.php">[+] New Add</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Sex</th>
			<th>From</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = mysqli_query($db, "SELECT * FROM calonsiswa");
		// $query = mysqli_query($db, $sql);

		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";


			echo "<td>";
			echo "<a href='formedit.php?id=".$siswa['id']."'>Edit</a>";
			echo "</td>";

			echo "<td>";
			echo "<a href='delete.php?id=".$siswa['id']."'>Delete</a>";
			echo "</td>";

			echo "</tr>";

		}

		?>

	</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

	</body>
</html>
