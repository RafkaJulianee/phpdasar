<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_siswa";

// coba konek
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    // kalau gagal
    echo "Koneksi GAGAL: " . mysqli_connect_error();
} else {
    // kalau berhasil
    echo "Berhasil🚀";
}
mysqli_close($conn);
?>
