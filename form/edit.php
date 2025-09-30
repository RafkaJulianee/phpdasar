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

    // Handle upload foto
    $fotoLama = $data['foto'];
    $fotoBaru = $_FILES['foto']['name'];

    if ($fotoBaru != "") {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($fotoBaru);

        // Upload file baru
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
            $foto = $fotoBaru;

            // Hapus foto lama kalau ada
            if ($fotoLama != "" && file_exists("uploads/" . $fotoLama)) {
                unlink("uploads/" . $fotoLama);
            }
        } else {
            $foto = $fotoLama; // kalau gagal upload, tetap pakai lama
        }
    } else {
        $foto = $fotoLama;
    }

    $update = mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jenis_kelamin='$jenis',
        alamat='$alamat',
        no_hp='$no_hp',
        foto='$foto'
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
<head>
  <meta charset="UTF-8">
  <title>Edit Data Siswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: "Montserrat", sans-serif; margin: 20px; }
    label { display: inline-block; width: 120px; margin-bottom: 10px; }
    input[type="text"], input[type="number"], select, textarea {
      padding: 5px; margin-bottom: 10px; border: 1px solid #ccc;
      border-radius: 4px; width: 250px;
    }
    input[type="submit"] {
      background-color: blue; border: none; color: white; padding: 10px 20px;
      font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px;
    }
    a { text-decoration: none; color: blue; font-weight: bold; margin-left: 10px; }
    img { border-radius: 8px; margin: 10px 0; }
  </style>
</head>
<body>
  <h2>Edit Data Siswa</h2>
  <form method="POST" enctype="multipart/form-data">
    <label>NIS:</label>
    <input type="number" name="nis" value="<?=$data['nis'];?>" readonly><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?=$data['nama'];?>" required><br><br>

    <label>Kelas:</label>
    <select name="kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1" <?=$data['kelas']=="XI-RPL1"?"selected":"";?>>XI-RPL1</option>
      <option value="XI-RPL2" <?=$data['kelas']=="XI-RPL2"?"selected":"";?>>XI-RPL2</option>
      <option value="XI-GIM" <?=$data['kelas']=="XI-GIM"?"selected":"";?>>XI-GIM</option>
      <option value="XI-TKJT 1" <?=$data['kelas']=="XI-TKJT 1"?"selected":"";?>>XI-TKJT 1</option>
      <option value="XI-TKJT 2" <?=$data['kelas']=="XI-TKJT 2"?"selected":"";?>>XI-TKJT 2</option>
      <option value="XI-TKJT 3" <?=$data['kelas']=="XI-TKJT 3"?"selected":"";?>>XI-TKJT 3</option>
      <option value="XI-TO 1" <?=$data['kelas']=="XI-TO 1"?"selected":"";?>>XI-TO 1</option>
      <option value="XI-TO 2" <?=$data['kelas']=="XI-TO 2"?"selected":"";?>>XI-TO 2</option>
      <option value="XI-TO 3" <?=$data['kelas']=="XI-TO 3"?"selected":"";?>>XI-TO 3</option>
      <option value="XI-AKL 1" <?=$data['kelas']=="XI-AKL 1"?"selected":"";?>>XI-AKL 1</option>
      <option value="XI-AKL 2" <?=$data['kelas']=="XI-AKL 2"?"selected":"";?>>XI-AKL 2</option>
      <option value="XI-MP 1" <?=$data['kelas']=="XI-MP 1"?"selected":"";?>>XI-MP 1</option>
      <option value="XI-MP 2" <?=$data['kelas']=="XI-MP 2"?"selected":"";?>>XI-MP 2</option>
      <option value="XI-SP 1" <?=$data['kelas']=="XI-SP 1"?"selected":"";?>>XI-SP 1</option>
      <option value="XI-SP 2" <?=$data['kelas']=="XI-SP 2"?"selected":"";?>>XI-SP 2</option>
    </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki" <?=$data['jenis_kelamin']=="Laki-Laki"?"checked":"";?>>Laki-Laki
    <input type="radio" name="jk" value="Perempuan" <?=$data['jenis_kelamin']=="Perempuan"?"checked":"";?>>Perempuan
    <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" value="<?=$data['alamat'];?>" required><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" value="<?=$data['no_hp'];?>" required><br><br>

    <label>Foto Lama:</label><br>
    <?php if ($data['foto'] != "") { ?>
      <img src="uploads/<?=$data['foto'];?>" width="120"><br>
    <?php } else { ?>
      <p>(Belum ada foto)</p>
    <?php } ?>

    <label>Ganti Foto:</label>
    <input type="file" name="foto"><br><br>

    <input type="submit" name="update" value="Update">
    <a href="index.php">Kembali</a>
  </form>
</body>
</html>
