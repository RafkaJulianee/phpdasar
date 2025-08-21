<?php
// bikin fungsi
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// cek kalau tombol submit diklik
if (isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $hasil = luasPersegiPanjang($panjang, $lebar);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Persegi Panjang</title>
</head>
<body>
    <h2>Form Hitung Luas Persegi Panjang</h2>
    <form method="post">
        Panjang: <input type="number" name="panjang" required><br><br>
        Lebar: <input type="number" name="lebar" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if (isset($hasil)) { ?>
        <h3>Hasil Luas = <?= $hasil ?></h3>
    <?php } ?>
</body>
</html>
