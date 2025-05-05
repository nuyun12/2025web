<?php
session_start();

if (!isset($_SESSION['login'])){
    header("location: login.html");
}

include 'koneksi.php';

$query = "SELECT m. *, p. nama namaProdi FROM mahasiswa m JOIN prodi p ON m.id_prodi= p.id; ";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href ="tambahmahasiswa.php">Tambah</a>
    <table border ="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>namaProdi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
    

        <?php 
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["telp"] ?></td>
                <td><?php echo $d["namaProdi"] ?></td>
                <td> <a href="deletmahasiswa.php?nim=<?= $d['nim']; ?>"
                onclick= "return confirm('Yakin ingin hapus?')">Delete</a> |
                <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>">Edit</a> </td> 
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <a href="logout.php">keluar</a>
</body>
</html>
