/fadli ingin main ps di aceng
//jika aceng tidak ada fadli pergi ke rental ps
//jika rental rental ps tutup apa yang kamu lakukan
//implementasikam ke dalam bentuk if else dalam php
echo "<br>";

$ps["fadli"]="Aceng Main Yuk";
$ps["aceng"]="aceng tidak ada kata mama acen";

if ($ps["fadli"]) {
    echo "aceng tidak ada";
} elseif ($ps["aceng"]) {
    echo "ke rental ps";
} else {
    echo "pulang ke rumah";
}


//buat array harga barang dan kalo kita panggil muncul
//harga barang nya dan nama barang nya buatkan minimal 
// 4 barang dengan metode yang berbeda :>

$listbarang=["Laptop Rtx 5090 Rp.2500000","Macbook Pro Rp.230000"];
echo "<br>";
echo ($listbarang[0]);
echo "<br><hr>";
echo "<h1>Pilih Barang</h1>";
$barang = [
  "Laptop" => 2500000,
  "Macbook Pro" => 230000,
  "Monitor" => 150000,
  "Keyboard" => 50000
];

echo '<form method="post">';
echo '<select name="pilihan" class="form-select" style="width:200px;display:inline-block;">';
foreach ($barang as $nama => $harga) {
  echo "<option value=\"$nama\">$nama</option>";
}
echo '</select> ';
echo '<button type="submit" class="btn btn-primary">Lihat Harga</button>';
echo '</form>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pilihan'])) {
  $pilih = $_POST['pilihan'];
  if (isset($barang[$pilih])) {
    echo "<p>Harga $pilih adalah Rp." . number_format($barang[$pilih], 0, ',', '.') . "</p>";
  } else {
    echo "<p>Barang tidak ditemukan.</p>";
  }
}


//buatkan array dengan harga barang nya misal laptop harganya 
//2.500.000 
//
$barang=["kenjut","mmk","aceng"];
$harga=["Rp10.000","Rp15.000","Rp20.000"];
echo "Barang ini " . $barang[1] . "harga barang ini " .
 $harga[1];
