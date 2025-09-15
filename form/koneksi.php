<?php
$host = "localhost";
$user = "root";
$password = "";
$db   = "db_siswarpl1";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Koneksi GAGAL: " . mysqli_connect_error());
} else {
    echo "<h1>Koneksi Berhasil🚀</h1>";
}


?>

