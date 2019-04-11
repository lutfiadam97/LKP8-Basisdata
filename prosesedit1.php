<?php
include 'config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$sekolah = $_POST['sekolah_asal'];

mysqli_query($db, "UPDATE calonsiswa SET nama ='$nama', alamat = '$alamat', jenis_kelamin = '$jk', sekolah_asal = '$sekolah' WHERE id = '$id'  ");
header("Location: daftarsiswa.php");
?>