<?php
// Membuat class (cetakannya)
class Mobil {
    // Property (ciri-ciri)
    public $merk;
    public $warna;

    // Method (aksi/perilaku)
    public function jalan() {
        echo "Mobil $this->merk sedang berjalan<br>";
    }
}

// Membuat object dari class Mobil
$mobil1 = new Mobil();   // objek pertama
$mobil1->merk = "Toyota"; // isi property
$mobil1->warna = "Merah";

$mobil2 = new Mobil();   // objek kedua
$mobil2->merk = "Honda";
$mobil2->warna = "Hitam";

// Menjalankan method
$mobil1->jalan();  // Mobil Toyota sedang berjalan
$mobil2->jalan();  // Mobil Honda sedang berjalan
?>
