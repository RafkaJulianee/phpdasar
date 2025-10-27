<?php 
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: "Montserrat", sans-serif;
        background-color: #f8f9fa;
      }
      h2:hover {
        color: #0d6efd;
      }
      a {
        text-decoration: none;
        color: black;
        padding: 5px;
      }
      a:hover {
        color: #0d6efd;
      }
      .navbar {
        margin: 20px 0;
      }
      .table-blue {
        background-color: #cfe2ff;
      }
      /* tambahan kecil biar tabel lebih clean */
      table {
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        vertical-align: middle;
      }
      th {
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.5px;
      }
      td {
        font-weight: 500;
      }
      .btn-sm {
        padding: 4px 10px;
        font-size: 14px;
        border-radius: 6px;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="navbar">
        <a href="index.php">Dashboard</a>
        <a href="index.php">Data Siswa</a>
        <a href="kelas.php">Data Kelas</a>
      </div>

      <div class="text-center mb-4">
        <h2 style="font-weight:700;">DATA KELAS</h2>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="tambah_kelas.php" class="btn btn-primary">+ Tambah Kelas</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-striped shadow-sm">
          <thead class="table-blue">
            <tr>
              <th width="5%">No</th>
              <th width="25%">Kelas</th>
              <th width="40%">Jurusan</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id ASC");
            if (mysqli_num_rows($query) == 0) {
              echo '<tr><td colspan="4" class="text-center text-muted py-4">Belum ada data kelas.</td></tr>';
            } else {
              while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['kelas']); ?></td>
                <td><?= htmlspecialchars($row['jurusan']); ?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="edit_kelas.php?id=<?= $row['id']; ?>">Edit</a>
                  <a class="btn btn-danger btn-sm" 
                     href="hapuskelas.php?id=<?= $row['id']; ?>" 
                     onclick="return confirm('Yakin mau hapus data kelas ini?')">Hapus</a>
                </td>
              </tr>
            <?php 
              }
            } 
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
