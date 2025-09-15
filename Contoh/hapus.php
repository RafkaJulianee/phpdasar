<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tb_siswa WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: index.php?pesan=berhasil_hapus");
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
