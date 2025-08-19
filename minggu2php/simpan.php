

<?
//Buatlah Tabel Yang Menampilkan Nama 
    //dan Harga Buah Menggunakan Perulanan
    //Minimal 5 Baris
    
// Buat tabel menampilkan Nama dan Harga Buah
echo "<h1 style='text-align:center'>Daftar Harga Buah</h1>";
echo "<table border='1' cellspacing='0' cellpadding='10' style='margin:auto; text-align:center'>";
echo "<tr>
        <th>No</th>
        <th>Nama Buah</th>
        <th>Harga (Rp)</th>
      </tr>";

// Data buah
$buah = [
    "Apel"  => 3000,
    "Jeruk" => 1500,
    "Pisang"=> 2000,
    "Lemon" => 3000,
    "Mangga"=> 4000
];

$no = 1;
foreach($buah as $nama => $harga){
    echo "<tr>
            <td>$no</td>
            <td>$nama</td>
            <td>$harga</td>
          </tr>";
    $no++;
}

echo "</table>";
?>