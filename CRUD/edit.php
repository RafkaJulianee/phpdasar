<?php
include "koneksi.php";

// Cek apakah ada nis di URL
if (!isset($_GET['nis'])) {
    echo "<script>alert('NIS tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$nis = $_GET['nis'];
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");

// Cek apakah data siswa ada
if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data siswa tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$data = mysqli_fetch_assoc($query);

// Update data setelah form disubmit
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jenis  = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['nohp'];

    $update = mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jenis_kelamin='$jenis',
        alamat='$alamat',
        no_hp='$no_hp'
        WHERE nis='$nis'
    ");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal update data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<!--
      ██╗██╗   ██╗██╗     ██╗ █████╗ ███╗   ██╗███████╗
      ██║██║   ██║██║     ██║██╔══██╗████╗  ██║██╔════╝
      ██║██║   ██║██║     ██║███████║██╔██╗ ██║█████╗  
 ██   ██║██║   ██║██║     ██║██╔══██║██║╚██╗██║██╔══╝  
 ╚█████╔╝╚██████╔╝███████╗██║██║  ██║██║ ╚████║███████╗
  ╚════╝  ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝
                R A F K A   J U L I A N
-->
<head>
  <meta charset="UTF-8">
  <title>Edit</title>
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      margin: 20px;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"],
    select {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 250px;
    }
    input[type="submit"] {
      background-color: blue;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }
    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <h2>Edit Data Siswa</h2>
  <form method="POST">

    <label>NIS:</label>
    <input type="number" name="nis" value="<?=$data['nis'];?>" readonly><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?=$data['nama'];?>" required><br><br>

    <label>Kelas:</label>
    <select name="kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1" <?=$data['kelas']=="XI-RPL1"?"selected":"";?>>XI-RPL1</option>
      <option value="XI-RPL2" <?=$data['kelas']=="XI-RPL2"?"selected":"";?>>XI-RPL2</option>
    </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki" <?=$data['jenis_kelamin']=="Laki-Laki"?"checked":"";?>>Laki-Laki
    <input type="radio" name="jk" value="Perempuan" <?=$data['jenis_kelamin']=="Perempuan"?"checked":"";?>>Perempuan
    <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" value="<?=$data['alamat'];?>" required><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" value="<?=$data['no_hp'];?>" required><br><br>

    <input type="submit" name="update" value="Simpan">
    <a href="index.php">Kembali</a>
  </form>
</body>
</html>
