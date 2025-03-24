<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggalLahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];





$query = "INSERT INTO mahasiswa  (nim, nama, tanggalLahir, telp, email, id_prodi) VALUES ('$nim', '$nama', '$tanggalLahir', '$telp', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");
?>