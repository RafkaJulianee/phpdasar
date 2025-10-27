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
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Montserrat";
      }

      h2:hover {
        color: blue;
      }

      a {
        text-decoration: none;
        color: white;
        padding: 5px;

      }

      a:hover {
        color: red;
    
      }
      .navbar{
        border: solid;
        padding: 10px;
        border-radius: 15px;
        background-color: blue;

      }

      .navbar {
        margin: 20px 0;
      }

      .table {
        border-radius: 8px;
        overflow: hidden;
      }

      thead.table-blue {
        background-color: #cfe2ff;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="container">
        <div class="navbar">
          <a href="index.php">Dashboard</a>
          <a href="index.php">Data Siswa</a>
          <a href="kelas.php">Data Kelas</a>
        </div>
        <div class="cloud">
          <span><h2 style="font-family:Montserrat;">DATA KELAS</h2></span>
        </div>
      </div>

      <a href="tambahkelas.php" class="btn btn-primary mb-3">+ Tambah Kelas</a>

      <table class="table">
        <thead class="table-blue">
          <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query = mysqli_query($conn, "SELECT * FROM kelas");
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['kelas']; ?></td>
              <td><?= $row['jurusan']; ?></td>
              <td>
                <a class="btn" style="color:green;" href="edit_kelas.php?id=<?= $row['id']; ?>">Edit</a>
                <a class="btn" style="color:red;" href="hapuskelas.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
