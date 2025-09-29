<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $nis    = $_POST['nis'];
    $kelas  = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tb_siswa (nama, nis, kelas, alamat) VALUES ('$nama','$nis','$kelas','$alamat')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: index.php?pesan=berhasil_tambah");
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f9fafb; margin:0; }
        header { background:#2563eb; color:white; padding:15px; text-align:center; }
        .container { width:40%; margin:40px auto; background:white; padding:25px; border-radius:10px; box-shadow:0 6px 12px rgba(0,0,0,0.1); }
        h2 { text-align:center; margin-bottom:25px; }
        form div { margin-bottom:15px; }
        label { font-weight:bold; display:block; margin-bottom:5px; }
        input, textarea { width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; }
        button { padding:10px 20px; background:#2563eb; color:white; border:none; border-radius:6px; cursor:pointer; width:100%; }
        button:hover { background:#1d4ed8; }
        a { display:block; text-align:center; margin-top:15px; text-decoration:none; color:#2563eb; }
        a:hover { text-decoration:underline; }
    </style>
</head>
<body>
    <header><h1>Tambah Data Siswa</h1></header>
    <div class="container">
        <h2>Form Tambah</h2>
        <form method="POST">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            <div>
                <label>NIS</label>
                <input type="text" name="nis" required>
            </div>
            <div>
                <label>Kelas</label>
                <input type="number" name="kelas" required>
            </div>
            <div>
                <label>Alamat</label>
                <textarea name="alamat" required></textarea>
            </div>
            <button type="submit" name="submit">Tambah</button>
        </form>
        <a href="index.php">← Kembali</a>
    </div>
</body>
</html>
