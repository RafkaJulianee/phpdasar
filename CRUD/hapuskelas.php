<?php
include "koneksi.php";

// pastikan ada parameter id di URL
if (!isset($_GET['id'])) {
    echo "<script>alert('Data kelas tidak ditemukan!'); window.location='kelas.php';</script>";
    exit;
}

$id = $_GET['id'];

// cek apakah data kelas benar-benar ada
$cek = mysqli_query($conn, "SELECT * FROM kelas WHERE id='$id'");
if (mysqli_num_rows($cek) == 0) {
    echo "<script>alert('Data kelas tidak ditemukan!'); window.location='kelas.php';</script>";
    exit;
}

// hapus data kelas berdasarkan id
$hapus = mysqli_query($conn, "DELETE FROM kelas WHERE id='$id'");

if ($hapus) {
    echo "<script>alert('Kelas berhasil dihapus!'); window.location='kelas.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus kelas!'); window.location='kelas.php';</script>";
}
?>
