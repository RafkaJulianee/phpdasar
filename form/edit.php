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
    $nama       = $_POST['nama'];
    $kelas      = $_POST['kelas'];
    $jenis      = $_POST['jenis_kelamin'];
    $alamat     = $_POST['alamat'];
    $no_hp      = $_POST['no_hp'];

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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Siswa</title>
    <style>
      body {
        font-family: "Montserrat", sans-serif;
        padding: 20px;
      }
      .form-container {
        max-width: 500px;
        margin: auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
      }
      input, select, textarea {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        border-radius: 6px;
        border: 1px solid #ccc;
      }
      button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 6px;
        cursor: pointer;
      }
      button:hover {
        background: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h2>Edit Data Siswa</h2>
      <form method="POST">
        <label>NIS</label>
        <input type="text" name="nis" value="<?=$data['nis'];?>" readonly>

        <label>Nama</label>
        <input type="text" name="nama" value="<?=$data['nama'];?>" required>

        <label>Kelas</label>
        <input type="text" name="kelas" value="<?=$data['kelas'];?>" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
          <option value="Laki Laki" <?=$data['jenis_kelamin']=="Laki Laki"?"selected":"";?>>Laki Laki</option>
          <option value="Perempuan" <?=$data['jenis_kelamin']=="Perempuan"?"selected":"";?>>Perempuan</option>
        </select>

        <label>Alamat</label>
        <textarea name="alamat" required><?=$data['alamat'];?></textarea>

        <label>No HP</label>
        <input type="text" name="no_hp" value="<?=$data['no_hp'];?>" required>

        <button type="submit" name="update">Update</button>
      </form>
    </div>
  </body>
</html>
