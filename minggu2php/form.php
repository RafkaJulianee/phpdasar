<?php
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
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
    <p>NIS: <?=$nis; ?></p>
    <p>Nama: <?=$nama; ?></p>
    <p>Kelas: <?=$kelas; ?></p>
    <p>jenis Kelamin: <?=$jk; ?></p>
    <p>alamat: <?=$alamat; ?></p>
    <p>No Hp: <?=$nohp; ?></p>


    <br>
  <button type="button" onclick="history.back()">Kembali</button>
</html>
