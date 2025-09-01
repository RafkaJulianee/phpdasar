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
        body {
    
         font-family: 'Inter', Arial, sans-serif;
        }
        p{
            margin: 5px 0;
            line-height: 1.5;
            color: #333;
            text-align: justify;
            padding: 10px 15px;
            border: 1px solid #eee;
            border-radius: 5px;
        }
        button {
            background-color: blue;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <h2>Biodata Kamu</h2>
    <p>NIS: <?=$nis; ?></p>
    <p>Nama: <?=$nama; ?></p>
    <p>Kelas: <?=$kelas; ?></p>
    <p>jenis Kelamin: <?=$jk; ?></p>
    <p>Alamat: <?=$alamat; ?></p>
    <p>No Hp: <?=$nohp; ?></p>


    <br>
  <button type="button" onclick="history.back()">Kembali</button>
</html>
