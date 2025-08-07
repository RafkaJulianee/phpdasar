

<?php
//fadli ingin main ps di aceng
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



echo "<hr><h2>Manajemen Jadwal</h2>";

session_start();
if (!isset($_SESSION['jadwal'])) {
    $_SESSION['jadwal'] = [];
}

// Tambah Jadwal
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'] ?? '';
    $waktu = $_POST['waktu'] ?? '';
    $foto = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $target = "uploads/";
        if (!is_dir($target)) mkdir($target);
        $filename = uniqid() . '_' . basename($_FILES['foto']['name']);
        $filepath = $target . $filename;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $filepath)) {
            $foto = $filepath;
        }
    }
    if ($nama && $waktu) {
        $_SESSION['jadwal'][] = [
            'nama' => $nama,
            'waktu' => $waktu,
            'foto' => $foto
        ];
    }
}

// Hapus Jadwal
if (isset($_GET['hapus'])) {
    $idx = (int)$_GET['hapus'];
    if (isset($_SESSION['jadwal'][$idx])) {
        if ($_SESSION['jadwal'][$idx]['foto'] && file_exists($_SESSION['jadwal'][$idx]['foto'])) {
            unlink($_SESSION['jadwal'][$idx]['foto']);
        }
        array_splice($_SESSION['jadwal'], $idx, 1);
    }
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

// Edit Jadwal
if (isset($_POST['edit'])) {
    $idx = (int)$_POST['idx'];
    $nama = $_POST['nama'] ?? '';
    $waktu = $_POST['waktu'] ?? '';
    $foto = $_SESSION['jadwal'][$idx]['foto'];
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $target = "uploads/";
        if (!is_dir($target)) mkdir($target);
        $filename = uniqid() . '_' . basename($_FILES['foto']['name']);
        $filepath = $target . $filename;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $filepath)) {
            if ($foto && file_exists($foto)) unlink($foto);
            $foto = $filepath;
        }
    }
    $_SESSION['jadwal'][$idx] = [
        'nama' => $nama,
        'waktu' => $waktu,
        'foto' => $foto
    ];
}

// Form Tambah Jadwal
echo '<form method="post" enctype="multipart/form-data">
    <input type="text" name="nama" placeholder="Nama Jadwal" required>
    <input type="text" name="waktu" placeholder="Waktu" required>
    <input type="file" name="foto" accept="image/*">
    <button type="submit" name="tambah">Tambah Jadwal</button>
</form>';

// Tabel Jadwal
echo '<table border="1" cellpadding="5" style="margin-top:10px;"><tr><th>No</th><th>Nama</th><th>Waktu</th><th>Foto</th><th>Aksi</th></tr>';
foreach ($_SESSION['jadwal'] as $i => $j) {
    echo "<tr>";
    echo "<td>" . ($i+1) . "</td>";
    echo "<td>" . htmlspecialchars($j['nama']) . "</td>";
    echo "<td>" . htmlspecialchars($j['waktu']) . "</td>";
    echo "<td>";
    if ($j['foto'] && file_exists($j['foto'])) {
        echo '<img src="' . htmlspecialchars($j['foto']) . '" width="60">';
    }
    echo "</td>";
    echo "<td>
        <a href='?edit=$i'>Edit</a> | 
        <a href='?hapus=$i' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
    </td>";
    echo "</tr>";
}
echo '</table>';

// Form Edit Jadwal
if (isset($_GET['edit'])) {
    $idx = (int)$_GET['edit'];
    if (isset($_SESSION['jadwal'][$idx])) {
        $j = $_SESSION['jadwal'][$idx];
        echo '<hr><h3>Edit Jadwal</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="idx" value="' . $idx . '">
            <input type="text" name="nama" value="' . htmlspecialchars($j['nama']) . '" required>
            <input type="text" name="waktu" value="' . htmlspecialchars($j['waktu']) . '" required>
            <input type="file" name="foto" accept="image/*">
            <button type="submit" name="edit">Simpan Perubahan</button>
        </form>';
    }
}
 ?>
