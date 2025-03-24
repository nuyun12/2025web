<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data =ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
       
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> <input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>tanggalLahir</td>
            <td><input type="date" name="tanggalLahir" required></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td><input type="text" name="telp" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td> Prodi</td>
            <td>
                <select name="id_prodi"> 
                <?php foreach ($data as $d) : ?>
                    <option value="<?php echo $d["id"] ?>"><?php echo $d["nama"] ?></option>
                <?php endforeach; ?>
                </select>
            </td>
            </tr>
    </table>
    <a href="index.php">kembali</a>
    <button type="submit">simpan</button>
    </form>
    
</body>
</html> 