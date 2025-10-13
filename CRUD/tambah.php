<?php
include "koneksi.php";

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jk     = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp   = $_POST['nohp'];

    // Cek apakah NIS sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('NIS sudah ada, silakan gunakan yang lain!'); window.location='tambah.php';</script>";
    } else {
        // Simpan data tanpa kolom foto
        $query = "INSERT INTO siswa (nis, nama, kelas, jenis_kelamin, alamat, no_hp) 
                  VALUES ('$nis', '$nama', '$kelas', '$jk', '$alamat', '$nohp')";
        
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
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
  <title>Tambah Data Siswa</title>
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
  <h2>Isi Bio Data Siswa</h2>
  <form action="" method="post" onsubmit="return validasi()">
    <label>NIS:</label>
    <input type="number" name="nis" id="nis"><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" id="nama"><br><br>

    <label>Kelas:</label>
    <select name="kelas" id="kelas">
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1">XI-RPL1</option>
      <option value="XI-RPL2">XI-RPL2</option>
    </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" id="alamat"><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" id="nohp"><br><br>

    <input type="submit" value="Simpan">
    <a href="index.php">Kembali</a>
  </form>

  <script>
    function validasi() {
      var nis = document.getElementById("nis").value;
      if (nis == "") {
        alert("NIS harus diisi!");
        return false;
      }
      var nama = document.getElementById("nama").value;
      if (nama == "") {
        alert("Nama harus diisi!");
        return false;
      }
      var kelas = document.getElementById("kelas").value;
      if (kelas == "") {
        alert("Kelas harus dipilih!");
        return false;
      }
      var jk = document.querySelector('input[name="jk"]:checked');
      if (!jk) {
        alert("Jenis Kelamin harus dipilih!");
        return false;
      }
      var alamat = document.getElementById("alamat").value;
      if (alamat == "") {
        alert("Alamat harus diisi!");
        return false;
      }
      var nohp = document.getElementById("nohp").value;
      if (nohp == "") {
        alert("No HP harus diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
