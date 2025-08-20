<?php
$nama=$_POST['nama'];
$alamat=$_POST['Alamat'];
$sekolah=$_POST['sekolah'];
$jurusan=$_POST['jurusan'];
$jk=$_POST['jk'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
              font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h2>Biodata Kamu</h2>
    <p>Nama: <?=$nama; ?></p>
    <p>Alamat: <?=$alamat; ?></p>
    <p>Sekolah: <?=$sekolah; ?></p>
    <p>jurusan: <?=$jurusan; ?></p>

    <p>jenis Kelamin: <?=$jk; ?></p>
    <br>
  <button type="button" onclick="history.back()">Kembali</button>
</html>
