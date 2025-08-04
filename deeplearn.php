<?php
//tipe data
$nama = "Rafka Julian Pratama";//string
$umur = 17;//integer
$berat = 50.5;//float
$menikah = false;//boolean

//if statement
$umur=17;
if ($umur >= 17) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda masih anak-anak";
}

//array tempat untuk menyimpan banyak data
$liverpool =["alisson", "trent", "virgil", "robertson", 
"fabinho", "henderson", "salah", "mane", "firminho"];
echo "<br>";
echo $liverpool[1] . "<br>";

//fungsi adalah sekumpulan kode yang bisa digunakan 
// berulang kali
function sapa($nama) {
  echo "Halo $nama!";
}
sapa("Rafka Julian Pratama👋");





?>
