<?php 
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kohler</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
         body {
            font-family: 'Segoe UI', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;color=">Data Siswanya Rafka😎</h2>
    <table border=5>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Alamat</th>
            <th>kelas</th>
            <th>Aksi</th>
        </tr>
     <?php
$no=1;

$result = mysqli_query($conn, "SELECT * FROM tb_siswa");
while ($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$no++."</td>
    <td>".$row['nama'] "</td>
    <td>".$row['nis']"</td>
    <td>".$row['kelas']"</td>
    <td>".$row['alamat']"</td>
    </tr>"

}
?>
    </table>


    
</body>
</html>

  