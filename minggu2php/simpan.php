  <?php
//Buatlah Tabel Yang Menampilkan Nama 
//dan Harga Buah Menggunakan Perulangan
//Minimal 5 Baris
echo "<h1 style=text-align:center>Tugas👾</h1>";
echo "<table border='1' style=text-align:center >
<tr>
    <th>No</th>
    <th>Nama Buah</th>
    <th>Harga</th>
</tr>";

$buah['Apel🍎']  = 3000;
$buah['Jeruk🍊'] = 1500;
$buah['Pisang🍌']= 2000;
$buah['Lemon🍋'] = 3000;
$buah['Mangga🥭']= 4000;

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
