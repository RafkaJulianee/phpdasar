<?php
// Pastikan path ke "koneksi.php" sudah benar.
include "koneksi.php";
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Siswa</title>

  <!-- External Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

  <!-- Custom Styles -->
  <style>
    :root {
      --bg-color: #f7f8fc;
      --card-bg-color: #ffffff;
      --text-color: #2c3e50;
      --text-color-light: #95a5a6;
      --border-color: #ecf0f1;
      --highlight-bg: #fffde7;
      --highlight-border: #fbc02d;
      --button-bg: #f8f9fa;
    }

    body {
      background-color: var(--bg-color);
      font-family: 'Inter', sans-serif;
      color: var(--text-color);
      padding: 1rem 0;
    }

    .main-container {
      background-color: var(--card-bg-color);
      border-radius: 24px;
      padding: 2.5rem;
      margin: 2rem auto;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
      background-image: radial-gradient(circle at 95% 5%, rgba(253, 224, 71, 0.25) 0%, rgba(253, 224, 71, 0) 40%);
      background-repeat: no-repeat;
      background-position: top right;
      max-width: 1200px;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .page-title {
      font-weight: 700;
      font-size: 2.25rem;
    }
    
    .page-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .search-container {
      position: relative;
      min-width: 300px;
      flex-grow: 1;
    }

    .search-container .bi-search {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-color-light);
    }

    .search-input {
      border-radius: 12px;
      border: 1px solid var(--border-color);
      padding: 0.75rem 1rem 0.75rem 2.5rem; /* Left padding for icon */
      background-color: var(--bg-color);
      transition: all 0.3s ease;
      width: 100%;
    }
    .search-input:focus {
      background-color: white;
      border-color: var(--highlight-border);
      box-shadow: 0 0 0 3px rgba(251, 192, 45, 0.2);
    }

    .header-actions {
      display: flex;
      gap: 0.75rem;
    }
    
    .btn-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: var(--button-bg);
      border: 1px solid var(--border-color);
      color: var(--text-color);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      transition: all 0.2s ease;
    }

    .btn-circle:hover {
      background-color: #e9ecef;
      color: var(--text-color);
      transform: translateY(-2px);
    }

    .data-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 0.75rem;
    }

    .data-table thead th {
      border: none;
      padding: 0.5rem 1.5rem;
      color: var(--text-color-light);
      font-weight: 500;
      text-align: left;
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .data-table tbody tr {
      background-color: var(--card-bg-color);
      border-radius: 12px;
      transition: all 0.2s ease-in-out;
      border: 1px solid var(--border-color);
      border-left: 5px solid transparent;
    }

    .data-table tbody tr:hover {
      background-color: var(--highlight-bg);
      border-left-color: var(--highlight-border);
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.04);
    }
    
    .data-table tbody td {
      padding: 1.25rem 1.5rem;
      vertical-align: middle;
      border-top: 1px solid var(--border-color);
      border-bottom: 1px solid var(--border-color);
    }
    .data-table tbody tr td:first-child {
        border-top-left-radius: 12px;
        border-bottom-left-radius: 12px;
        border-left: 1px solid var(--border-color);
    }
    .data-table tbody tr td:last-child {
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
        border-right: 1px solid var(--border-color);
    }
    /* Remove top/bottom borders from all but the first row's cells */
    .data-table tbody tr:first-child td {
        border-top: 1px solid var(--border-color) !important;
    }

    .student-info { display: flex; align-items: center; }

    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #7f8c8d;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      margin-right: 1rem;
      text-transform: uppercase;
    }
    
    .student-name { font-weight: 600; color: var(--text-color); }
    .student-nis { font-size: 0.875rem; color: var(--text-color-light); }
    
    .action-buttons a {
        color: var(--text-color-light);
        text-decoration: none;
        margin: 0 0.5rem;
        font-size: 1.2rem;
        transition: color 0.2s ease;
    }
    .action-buttons .btn-edit:hover { color: #2980b9; }
    .action-buttons .btn-delete:hover { color: #c0392b; }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="main-container">
      
      <div class="page-header">
        <h1 class="page-title">Siswa</h1>
      </div>

      <div class="page-controls">
        <div class="search-container">
          <i class="bi bi-search"></i>
          <input type="text" id="searchInput" class="form-control search-input" placeholder="Cari siswa berdasarkan nama, NIS, dll...">
        </div>
        <div class="header-actions">
          <a href="tambah.php" class="btn btn-circle" title="Tambah Siswa Baru">
            <i class="bi bi-plus-lg"></i>
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table data-table align-middle">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>No Hp</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody id="studentTableBody">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM siswa");
            if(mysqli_num_rows($query) > 0) {
              while ($row = mysqli_fetch_assoc($query)) {
                $first_letter = mb_substr($row['nama'], 0, 1);
            ?>
              <tr>
                <td>
                  <div class="student-info">
                    <div class="avatar"><?= htmlspecialchars($first_letter) ?></div>
                    <div>
                      <div class="student-name"><?= htmlspecialchars($row['nama']); ?></div>
                      <div class="student-nis">NIS: <?= htmlspecialchars($row['nis']); ?></div>
                    </div>
                  </div>
                </td>
                <td><?= htmlspecialchars($row['kelas']); ?></td>
                <td><?= htmlspecialchars($row['jenis_kelamin']); ?></td>
                <td><?= htmlspecialchars($row['alamat']); ?></td>
                <td><?= htmlspecialchars($row['no_hp']); ?></td>
                <td class="text-end action-buttons">
                  <a class="btn-edit" href="edit.php?nis=<?= $row['nis']; ?>" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a class="btn-delete" href="hapus.php?nis=<?= $row['nis']; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                    <i class="bi bi-trash3"></i>
                  </a>
                </td>
              </tr>
            <?php } } else { ?>
              <tr id="no-data">
                <td colspan="6" class="text-center py-5">
                    <p class="text-muted">Belum ada data siswa.</p>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Fitur Pencarian Real-time
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let tableBody = document.getElementById('studentTableBody');
        let rows = tableBody.getElementsByTagName('tr');
        let noDataRow = document.getElementById('no-data');
        let found = false;

        for (let i = 0; i < rows.length; i++) {
            // Pastikan kita tidak memfilter baris "no data"
            if(rows[i].id === 'no-data') continue;

            let nameCell = rows[i].getElementsByTagName('td')[0];
            if (nameCell) {
                let textValue = nameCell.textContent || nameCell.innerText;
                if (textValue.toUpperCase().indexOf(filter) > -1) {
                    rows[i].style.display = "";
                    found = true;
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
        
        // Tampilkan atau sembunyikan baris "no data" jika tidak ada hasil pencarian
        if (noDataRow) {
            if (found) {
                noDataRow.style.display = "none";
            } else {
                 // Ubah pesan jika tidak ada hasil pencarian
                noDataRow.querySelector('p').textContent = 'Data siswa tidak ditemukan.';
                noDataRow.style.display = "";
            }
        }
    });
  </script>
</body>
</html>

