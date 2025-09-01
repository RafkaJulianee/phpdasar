<?php
$nis    = $_POST['nis'];
$nama   = $_POST['nama'];
$kelas  = $_POST['kelas'];
$alamat = $_POST['alamat'];
$nohp   = $_POST['nohp'];
$jk     = $_POST['jk'];

// Data untuk QR
$dataQR = "NIS: $nis | Nama: $nama | Kelas: $kelas | JenisKelamin: $jk | Alamat: $alamat | HP: $nohp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Biodata</title>
    <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    .container {
      display: flex;
      justify-content: flex-start;
      align-items: center;   
      gap: 40px;
    }
    .biodata {
      width: 350px;        
    }
    .biodata p {
      margin: 5px 0;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background: #f9f9f9;
    }
    .qr-code img {
      width: 180px;        
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      background: #fff;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      background: blue;
      color: #fff;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Biodata -->
    <div class="biodata">
      <h2>Biodata Kamu</h2>
      <p>NIS: <?=$nis;?></p>
      <p>Nama: <?=$nama;?></p>
      <p>Kelas: <?=$kelas;?></p>
      <p>Jenis Kelamin: <?=$jk;?></p>
      <p>Alamat: <?=$alamat;?></p>
      <p>No HP: <?=$nohp;?></p>
      <button type="button" onclick="history.back()">Kembali</button>
    </div>

    <!-- QR Code -->
    <div class="qr-code">
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?=urlencode($dataQR);?>" alt="QR Code">
    </div>
  </div>

</body>
</html>
