<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/profil1.png" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <style>
    body{
      font-family: "Montserrat";
    }
   </style>
  </head>
  <body>
    <div class="container">
     <h2>Data Siswa XI-RPL 1</h2>
     <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
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
                 </tr>

            <?php
            
        }
              ?>
       
        </tbody>

     </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>