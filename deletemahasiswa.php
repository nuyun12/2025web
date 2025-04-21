<?php
include "koneksi.php";

$nim = $_GET['nim'];
$query = "DELETE FROM mahasiswa WHERE nim='$nim'";

mysqli_query($conn, $query);

header ("location:index.php");
?>