<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="style.css">
    <style>
          body {

       font-family: 'Inter', Arial, sans-serif;
    }
   img{
       display: block;
       margin: 0 auto;
       max-width: 30%;
       height: auto;
   }

    footer {
      margin-top: auto;
      background:white;
      overflow: hidden;   /* biar gak keluar area */
      padding: 10px 0;
    }

    .track {
      display: flex;
      gap: 30px;
      animation: jalan 20s linear infinite; /* durasi & loop */
    }

    footer img {
      width: 100px;
      border-radius: 10px;
    }

    @keyframes jalan {        
      from { transform: translateX(100%); }  /* mulai dari kanan */
      to   { transform: translateX(-100%); } /* jalan ke kiri */
    }
      
    </style>
</head>
<body>

   
 <footer>
    <div class="track">
      <img src="zenitsu.gif" alt="foto2">
      <img src="itaci.gif" alt="foto3">
      <img src="sasuke.gif" alt="foto3">
      <img src="bebek.gif" alt="foto3">

    </div>
  </footer>
<?php

//Buatlah Tabel Yang Menampilkan Nama 
//dan Harga Buah Menggunakan Perulangan
//Minimal 5 Baris

echo "<table border='1' style=text-align:center >

 <tr style='background-color: yellow'>
    <th>No</th>
    <th>Nama Buah</th>
    <th>Harga/Kg</th>
</tr>";
echo "<hr style='border:none; border-top:10px dashed white; background-color:black; height:10px;'>";
echo "<h3>Tugas1</h3>";
$buah['Apel🍎']  = 20000;
$buah['Jeruk🍊'] = 15000;
$buah['Pisang🍌']= 20000;
$buah['Lemon🍋'] = 30000;
$buah['Semangka🍉']= 40000;
$buah['Jambu🍐']= 40000;
$buah['Timun🥒']= 40000;

$no = 1;
foreach ($buah as $nama => $harga) {
    echo "<tr><td>";
    echo $no++;
    echo "</td><td>";
    echo $nama;
    echo "</td><td>";
    echo $harga;
    echo "</td></tr>";
}
echo "</table>";
?>
<script>
   
</script>
</body>
</html>