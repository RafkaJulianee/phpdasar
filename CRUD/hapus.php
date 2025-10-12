<?php
include "koneksi.php";

// Cek apakah ada nis di URL
if (!isset($_GET['nis'])) {
    echo "<script>alert('NIS tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$nis = $_GET['nis'];

// Cek apakah data ada
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");
if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data siswa tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

// Hapus data
$delete = mysqli_query($conn, "DELETE FROM siswa WHERE nis='$nis'");

if ($delete) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='index.php';</script>";
}
?>
