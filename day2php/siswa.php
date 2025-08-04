<?php
$conn = mysqli_connect("localhost", "root", "", "login_system");

// TAMBAH DATA
if (isset($_POST["tambah"])) {
  $nama   = htmlspecialchars($_POST["nama"]);
  $kelas  = htmlspecialchars($_POST["kelas"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  mysqli_query($conn, "INSERT INTO siswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')");
}

// HAPUS DATA
if (isset($_GET["hapus"])) {
  $id = $_GET["hapus"];
  mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
}

// EDIT DATA
if (isset($_POST["edit"])) {
  $id     = $_POST["id"];
  $nama   = htmlspecialchars($_POST["nama"]);
  $kelas  = htmlspecialchars($_POST["kelas"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  mysqli_query($conn, "UPDATE siswa SET nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=$id");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa</title>
  <style>
    body { font-family: sans-serif; background: #1f1f2f; color: white; padding: 30px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #444; padding: 8px; text-align: center; }
    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      border-radius: 8px;
      border: none;
    }
    .card {
      background: #2c2c3d;
      padding: 20px;
      border-radius: 12px;
      margin-bottom: 20px;
    }
    button {
      padding: 8px 16px;
      background: #6f00ff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    a {
      color: #ff7b7b;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>Tambah Siswa</h2>
    <form method="POST">
      <input type="text" name="nama" placeholder="Nama siswa" required>
      <input type="text" name="kelas" placeholder="Kelas" required>
      <textarea name="alamat" placeholder="Alamat lengkap" required></textarea>
      <button type="submit" name="tambah">Simpan</button>
    </form>
  </div>

  <?php if (isset($_GET["edit"])): 
    $id = $_GET["edit"];
    $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id = $id"));
  ?>
  <div class="card">
    <h2>Edit Siswa</h2>
    <form method="POST">
      <input type="hidden" name="id" value="<?= $data['id'] ?>">
      <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
      <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required>
      <textarea name="alamat" required><?= $data['alamat'] ?></textarea>
      <button type="submit" name="edit">Simpan Perubahan</button>
    </form>
  </div>
  <?php endif; ?>

  <h2>Daftar Siswa</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC");
      while ($row = mysqli_fetch_assoc($result)) :
      ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["kelas"] ?></td>
        <td><?= $row["alamat"] ?></td>
        <td>
          <a href="?edit=<?= $row["id"] ?>">Edit</a> |
          <a href="?hapus=<?= $row["id"] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile ?>
    </tbody>
  </table>

</body>
</html>
