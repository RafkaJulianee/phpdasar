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

    // --- BARU: LOGIKA UNTUK UPDATE FOTO ---
    $foto_lama = $_POST['foto_lama'];
    $nama_file_baru = $foto_lama; // Default, gunakan nama file lama

    // Cek apakah user mengupload file foto baru
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0 && !empty($_FILES['foto']['name'])) {
        // Hapus foto lama jika ada
        if (!empty($foto_lama) && file_exists("uploads/" . $foto_lama)) {
            unlink("uploads/" . $foto_lama);
        }

        // Proses upload foto baru
        $foto_nama = $_FILES['foto']['name'];
        $foto_tmp  = $_FILES['foto']['tmp_name'];
        $nama_file_baru = uniqid() . '-' . basename($foto_nama);
        $target_dir = "uploads/";
        $target_file = $target_dir . $nama_file_baru;
        move_uploaded_file($foto_tmp, $target_file);
    }
    // --- AKHIR LOGIKA FOTO ---

    // --- MODIFIKASI: Tambahkan 'foto' ke query UPDATE ---
    $update = mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jenis_kelamin='$jenis',
        alamat='$alamat',
        no_hp='$no_hp',
        foto='$nama_file_baru'
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
  <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
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
    select,
    textarea {
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
  <form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="foto_lama" value="<?=$data['foto'];?>">

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

    <a href="index.php">Kembali</a>
  </form>

  <script>
    function tampilkanPreview(input, idPreview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById(idPreview).src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
</body>
</html>