<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_siswarpl1"; // nama database kamu

// koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi GAGAL: " . mysqli_connect_error());
} else {
    // biar keliatan di console (debug aja)
    echo "<!-- Koneksi BERHASIL ke db_siswarpl1 -->";
}
?>
