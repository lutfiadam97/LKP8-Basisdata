<!DOCTYPE html>
<html>
<head>
	<title>New Student Registration | St. Freya Academy </title>
</head>

<body>
	<header>
		<h3>New Student Registration</h3>
		<h1>St. Freya Academy</h1>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="formdaftar.php">Register</a></li>
			<li><a href="daftarsiswa.php">Registrant</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Registration is successful!";
			} else {
				echo "Registration Failed";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
