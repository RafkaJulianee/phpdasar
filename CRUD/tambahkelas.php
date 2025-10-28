<?php
include "koneksi.php";

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Cek apakah kelas sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM kelas WHERE kelas='$kelas' AND jurusan='$jurusan'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Kelas dan Jurusan ini sudah ada!'); window.location='tambahkelas.php';</script>";
    } else {
        // Simpan data ke tabel kelas
        $query = "INSERT INTO kelas (kelas, jurusan) VALUES ('$kelas', '$jurusan')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data kelas berhasil ditambahkan!'); window.location='kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Kelas</title>
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
    input[type="text"] {
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
  <h2>Tambah Data Kelas</h2>
  <form action="" method="post" onsubmit="return validasi()">
    <label>Kelas:</label>
    <input type="text" name="kelas" id="kelas"><br><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" id="jurusan"><br><br>

    <input type="submit" value="Simpan">
    <a href="kelas.php">Kembali</a>
  </form>

  <script>
    function validasi() {
      var kelas = document.getElementById("kelas").value;
      if (kelas == "") {
        alert("Nama Kelas harus diisi!");
        return false;
      }
      var jurusan = document.getElementById("jurusan").value;
      if (jurusan == "") {
        alert("Jurusan harus diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
