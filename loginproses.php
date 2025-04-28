<?php
session_start();
include "koneksi.php";

$nim = $_POST['nim'];
$password = $_POST['Password'];

$query= "SELECT * FROM `mahasiswa` WHERE nim = '$nim'";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil);

if (password_verify($password, $data['password'])) {
    $_SESSION['login'] = true;
    echo "password benar";
    header("location:index.php");
} else {
    echo "password salah";
    header("location:login.html");
}

?>