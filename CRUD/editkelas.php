<?php
include "koneksi.php";

// Cek apakah ada id di URL
if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='kelas.php';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kelas WHERE id='$id'");

// Cek apakah data ada
if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='kelas.php';</script>";
    exit;
}

$data = mysqli_fetch_assoc($query);

// Update data setelah form disubmit
if (isset($_POST['update'])) {
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $update = mysqli_query($conn, "UPDATE kelas SET 
        kelas='$kelas',
        jurusan='$jurusan'
        WHERE id='$id'
    ");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='kelas.php';</script>";
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
  <title>Edit Kelas</title>
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
  <h2 align="center">Edit Data Kelas</h2>

  <form method="POST">
    <label>ID:</label>
    <input type="text" name="id" value="<?=$data['id'];?>" readonly><br><br>

    <label>Kelas:</label>
    <input type="text" name="kelas" value="<?=$data['kelas'];?>" required><br><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="<?=$data['jurusan'];?>" required><br><br>

    <input type="submit" name="update" value="Simpan">
    <a href="kelas.php">Kembali</a>
  </form>
</body>
</html>
