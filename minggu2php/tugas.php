<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
          body {

       font-family: 'Inter', Arial, sans-serif;
    }

    </style>
</head>
<body>
    <marquee behavior="" direction=""><strong>Php Menyenangkan🚀</strong></marquee>
<img src="" alt="">

<?php

//Buatlah Tabel Yang Menampilkan Nama 
//dan Harga Buah Menggunakan Perulangan
//Minimal 5 Baris
echo "<h1 style=text-align:center>Tugas👾</h1>";
echo "<table border='1' style=text-align:center >

 <tr style='background-color: yellow'>
    <th>No</th>
    <th>Nama Buah</th>
    <th>Harga/Kg</th>
</tr>";
echo "<hr>";
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

</body>
</html>