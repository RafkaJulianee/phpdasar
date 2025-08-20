<?php
// nilai.php
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

if ($nilai >= 75) {
    echo "Selamat $nama, kamu lulus!";
} else {
    echo "Maaf $nama, kamu belum lulus.";
}
?>
