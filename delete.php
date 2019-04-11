<?php  
include("config.php");
if (isset($_GET['id'])) {
	//ambil id dari query string
	$id = $_GET['id'];

	//buat query delete
	$query = mysqli_query($db,"DELETE FROM calonsiswa WHERE id=$id");

	//apakah query berhasil?
	if ($query) {
		header("Location: daftarsiswa.php");
	} else {
		die("Delete failed...");
	}
} else {
	die("Wrong Access...");
}
?>