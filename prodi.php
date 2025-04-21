<?php
$servername = "localhost";
$database = "2025web";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM prodi";
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
    <h1>Data Prodi</h1>
    <br>
    <table border ="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kaprodi</th>
            <th>Jurusan</th>
        </thead>
        <tbody>

        <?php 
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["kaprodi"] ?></td>
                <td><?php echo $d["jurusan"] ?></td>
            
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    
</body>
</html>
</body>
</html>