<?php
$servername = "localhost";
$database = "2025web";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


function ambildata($query):array
{
    $conn = $GLOBALS['conn'];
    $hasil =mysqli_query(mysql: $conn, query: $query);

    $data = [];
    while ($baris = mysqli_fetch_assoc(result: $hasil)) {
    $data[] = $baris;
    }
    return $data;
}
