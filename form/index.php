<?php 
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/profil1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: "Montserrat";
      }
        img {
    width: 80px;       /* biar ukurannya konsisten */
    height: 80px;      /* samain dengan width */
    object-fit: cover; /* biar gambar nggak gepeng */
    border-radius: 50%; 
  }
    </style>
  </head>
  <body>
    <div class="container">
     <div class="container">
            <div class="cloud">
                 <span> <h2 style="font-family:Montserrat ;">Data Siswa</h2></span>
            </div>
        </div>

     <!-- Tombol Tambah Data -->
     <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>

     <table class="table table-bordered align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $query = mysqli_query($conn, "SELECT * FROM siswa");
            while($row=mysqli_fetch_assoc($query)){
            ?>
                 <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['nis'];?></td>
                    <td><?=$row['nama'];?></td>
                    <td><?=$row['kelas'];?></td>
                    <td><?=$row['jenis_kelamin'];?></td>
                    <td><?=$row['alamat'];?></td>
                    <td><?=$row['no_hp'];?></td>
                    <td>
                      <?php if ($row['foto']) { ?>
                        <img src="<?=$row['foto'];?>" alt="Foto">
                      <?php } else { ?>
                        <span class="text-muted">Tidak ada</span>
                      <?php } ?>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-success" href="edit.php?nis=<?=$row['nis'];?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="hapus.php?nis=<?=$row['nis'];?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                 </tr>
            <?php } ?>
        </tbody>
     </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
