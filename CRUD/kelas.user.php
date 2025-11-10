<?php 
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
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

      h2 {
        font-weight: 700;
        color: #212529;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      h2:hover {
        color: #0d6efd;
      }

      .navbar {
        background-color: #ffffff !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }

      .navbar-brand {
        font-weight: 700;
        color: #0d6efd !important;
      }

      .nav-link {
        color: #212529 !important;
        font-weight: 500;
        transition: 0.3s;
      }

      .nav-link:hover {
        color: #0d6efd !important;
      }

      .table {
        border-radius: 8px;
        overflow: hidden;
      }

      thead.table-blue {
        background-color: #cfe2ff;
      }

      .btn-primary {
        border-radius: 10px;
        font-weight: 500;
      }
      
      /* Tambahan untuk user view */
      .user-view-badge {
        background-color: #0d6efd;
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 500;
        margin-left: 10px;
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Data Siswa <span class="user-view-badge">User View</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.user.php">Data Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-primary fw-semibold" href="kelas_user.php">Data Kelas</a>
            </li>
               <li class="nav-item">
              
                <a class="nav-link" href="login.php" style="color: blue;">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
      <h2>DATA KELAS</h2>

      <!-- Tombol Tambah Kelas dihilangkan untuk user -->

      <table class="table table-striped">
        <thead class="table-blue">
          <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <!-- Kolom Aksi dihilangkan untuk user -->
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
              <!-- Tombol Edit dan Hapus dihilangkan untuk user -->
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>