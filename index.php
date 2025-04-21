<?php
$servername = "localhost";
$database = "2025web";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT m. *, p. nama namaProdi FROM mahasiswa m JOIN prodi p ON m.id_prodi= p.id; ";
$hasil = mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
}

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
</body>
</html>
$query = "UPDATE mahasiswa SET nama = '$nama',
tanggalLahir = '$tanggalLahir', telp = '$telp',
email = '$email', id_prodi = '$id_prodi' WHERE nim = '$nim';