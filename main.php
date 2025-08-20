<?php
//fungsi dasar
function sapa(){
    echo "Haloo,Selamat Datang";
}
echo '<br>';
//panggil fungsi
sapa();
//fungsi dengan parameter
function salam($nama){
    echo "Haloo, $nama! Apa Kabar?<br>";
}
salam("rafka");
salam("rafka");
salam("rafka");
//fuungsi dengan retrun
function tambah($a,$b){
    return $a+$b;

}
$hasil=tambah(5,7);
echo "Hasil nya adalah:$hasil";






?>
