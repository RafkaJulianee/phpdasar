
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mobile Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #6c63ff;
            --secondary: #48c6ef;
            --accent: #ffd166;
            --background: #f6f8fc;
            --card: #ffffffcc;
            --text: #22223b;
            --muted: #adb5bd;
        }
        html, body {
            background: linear-gradient(120deg, var(--secondary) 0%, var(--primary) 100%);
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            color: var(--text);
        }
        .container {
            max-width: 480px;
            margin: 0 auto;
            padding: 1.2rem 0.7rem 2.5rem 0.7rem;
        }
        .glass-card {
            background: var(--card);
            border-radius: 22px;
            box-shadow: 0 4px 24px 0 rgba(108,99,255,0.10);
            padding: 1.5rem 1.2rem;
            margin: 1.2rem 0;
            border: none;
        }
        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 3px solid var(--accent);
            margin: 0 auto 0.7rem auto;
            display: block;
            background: #fff;
            object-fit: cover;
        }
        h1, h2, h4 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: .7rem;
        }
        h1 {
            font-size: 2rem;
        }
        .badge {
            font-weight: 600;
            background: var(--accent);
            color: var(--primary);
            border-radius: 10px;
            font-size: 1rem;
        }
        .btn-primary, .btn-success {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            font-weight: 600;
            color: #fff;
            border-radius: 12px;
            font-size: 1.1rem;
            padding: .7rem 1.2rem;
            margin-top: .3rem;
        }
        .btn-primary:active, .btn-success:active {
            background: var(--primary);
        }
        .table {
            background: transparent;
            border-radius: 14px;
            overflow: hidden;
            font-size: 1rem;
        }
        .table th {
            background: var(--primary);
            color: #fff;
            font-weight: 700;
            letter-spacing: .5px;
            border: none;
        }
        .table td {
            background: var(--card);
            border: none;
        }
        .alert-success {
            background: #e0ffe0;
            color: var(--primary);
            border: none;
            font-weight: 600;
            border-radius: 12px;
        }
        .text-muted {
            color: var(--muted) !important;
        }
        .form-select, .form-control, .input-group-text {
            border-radius: 12px !important;
            border: 1.5px solid var(--primary);
            font-size: 1rem;
        }
        .input-group-text {
            background: #f3f0ff;
        }
        .list-group-item {
            background: transparent;
            border: none;
            color: var(--text);
        }
        marquee {
            color: var(--primary);
            font-weight: 700;
            margin: .7rem 0;
            background: #f3f0ff;
            border-radius: 10px;
            padding: .4rem 0;
            font-size: 1.1rem;
        }
        hr {
            border-color: var(--primary);
            opacity: 0.10;
        }
        @media (max-width: 600px) {
            h1 { font-size: 1.5rem; }
            .glass-card { padding: 1.1rem 0.7rem; }
            .container { padding: 0.7rem 0.2rem 2rem 0.2rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="glass-card text-center">
            <img src="image.png" alt="Profile" class="profile-img">
            <h2>Rafka Julian Pratama</h2>
            <p style="color:var(--accent);font-weight:600;">XI-RPL1</p>
            <marquee>"Kumpulan Tugas PHP"</marquee>
        </div>

        <?php
           $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
echo '<div class="glass-card text-center">';
echo "<h4>Jadwal Hari</h4>";
foreach ($hari as $i => $h) {
    if ($i < 5) {
        echo "Hari $h = <span class='badge'>Sekolah</span><br>";
    } else {
        echo "Hari $h = <span class='badge'>Libur</span><br>";
    }
}
echo "</div><hr>";

echo '<div class="glass-card">';
echo "<h1 id='tugas'>Tugas 2 🍇</h1>";
$buah = ["Anggur"=>10, "Apel"=>20, "Naga"=>5, "Jambu"=>2];
foreach ($buah as $nama=>$jumlah) {
    echo "<div>$nama: <span class='badge'>$jumlah</span></div>";
}
echo "</div><hr>";

echo '<div class="glass-card">';
echo "<h1>Tugas 3 🚀</h1>";
$nama="Rafka Julian Pratama";
if ($nama=="Rafka Julian Pratama"){
  echo "<div class='mb-2'>Nama Kamu Adalah: <span class='badge'>$nama</span></div>";
}else echo"<div class='text-danger'>Gagal</div>";

$usia =18;
if ($usia==18){
  echo "<div class='mb-2'>Boleh Masuk</div>";
}else{
  echo "<div class='mb-2'>Ga Boleh Masuk</div>";
}

$karyawan="Milk";
$boss="Choko";
if ($karyawan=="Milk") {
  echo "<div class='mb-2'>Hallo Karyawan</div>";
} elseif ($karyawan=="Choko") {
  echo "<div class='mb-2'>Hallo Boos Choko</div>";
} else {
  echo "<div class='mb-2'>Anda Bukan Bagian Kami</div>";
}
echo "</div>";

echo '<div class="glass-card">';
echo "<h1>Tugas 4 👾</h1>";
for($i =1;$i<=10; $i++){
  echo "<span class='badge'>$i</span> Hello World<br>";
}
echo "</div><hr>";

echo '<div class="glass-card">';
echo "<h1>Tugas 5</h1>";
$nama ="Rafka Julian Pratama";
$kelas="X RPL 1";
$jurusan=["Rekayasa Perangkat Lunak","TKR","TJKT"];
echo "Anda berada di jurusan: <span class='badge'>{$jurusan[0]}</span><br>Nama anda adalah <span class='badge'>$nama</span><br>Anda berada di kelas <span class='badge'>$kelas</span>";
echo "</div>";

$uang=500004893849;
$hutang=10083273823;
$sisauang= $uang - $hutang;
echo '<div class="glass-card">';
echo "Sisa Uang Anda Adalah: <span class='badge'>Rp " . number_format($sisauang,0,',','.') . "</span>";
echo "</div>";

echo '<div class="glass-card">';
echo "<h4>Fadli Main PS</h4>";
$ps["fadli"]="Aceng Main Yuk";
$ps["aceng"]="aceng tidak ada kata mama acen";
if ($ps["fadli"]) {
    echo "aceng tidak ada";
} elseif ($ps["aceng"]) {
    echo "ke rental ps";
} else {
    echo "pulang ke rumah";
}
echo "</div>";

echo '<div class="glass-card">';
echo "<h4>Daftar Barang</h4>";
$listbarang=["Laptop Rtx 5090 Rp.2.500.000","Macbook Pro Rp.230.000"];
foreach ($listbarang as $item) {
    echo "<div>$item</div>";
}
echo "<hr>";
echo "<h4>Pilih Barang</h4>";
$barang = [
  "Laptop" => 2500000,
  "Macbook Pro" => 230000,
  "Monitor" => 150000,
  "Keyboard" => 50000
];
echo '<form method="post" class="row g-2 align-items-center">';
echo '<div class="col-12 mb-2"><select name="pilihan" class="form-select">';
foreach ($barang as $nama => $harga) {
  echo "<option value=\"$nama\">$nama</option>";
}
echo '</select></div>';
echo '<div class="col-12"><button type="submit" class="btn btn-primary w-100">Lihat Harga</button></div>';
echo '</form>';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pilihan'])) {
  $pilih = $_POST['pilihan'];
  if (isset($barang[$pilih])) {
    echo "<div class='mt-2'>Harga <span class='badge'>$pilih</span> adalah <span class='badge'>Rp " . number_format($barang[$pilih], 0, ',', '.') . "</span></div>";
  } else {
    echo "<div class='text-danger'>Barang tidak ditemukan.</div>";
  }
}
echo "</div>";

echo '<div class="glass-card">';
$barang=["kenjut","mmk","aceng"];
$harga=["Rp10.000","Rp15.000","Rp20.000"];
echo "Barang ini <span class='badge'>{$barang[1]}</span> harga barang ini <span class='badge'>{$harga[1]}</span>";
echo "</div><hr>";

echo '<div class="glass-card">';
echo "<h1 id='pesanan'>Sistem Pemesanan Makanan 🍔</h1>";
$menu = [
  "Nasi Goreng" => 15000,
  "Mie Ayam" => 12000,
  "Ayam Geprek" => 17000,
  "Sate Ayam" => 20000,
  "Es Teh Manis" => 5000,
  "Jus Alpukat" => 10000
];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
  $pesanan = $_POST['menu'] ?? [];
  $jumlah = $_POST['jumlah'] ?? [];
  $total = 0;
  echo '<div class="glass-card" style="max-width:400px;margin:1rem auto;background:#eaf4ff;">';
  echo "<h4 class='mb-3' style='color:var(--primary);'>Detail Pesanan</h4>";
  if (!empty($pesanan)) {
    echo "<ul class='list-group mb-3'>";
    foreach ($pesanan as $i => $makanan) {
      $jml = intval($jumlah[$i]);
      $harga = $menu[$makanan];
      $subtotal = $harga * $jml;
      $total += $subtotal;
      echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
      echo "<span>$makanan <span class='badge'>$jml</span></span>";
      echo "<span>Rp " . number_format($subtotal, 0, ',', '.') . "</span>";
      echo "</li>";
    }
    echo "</ul>";
    echo "<h5 class='text-end' style='color:var(--accent);'>Total: Rp " . number_format($total, 0, ',', '.') . "</h5>";
  } else {
    echo "<p class='text-danger'>Belum ada makanan yang dipilih.</p>";
  }
  echo '<a href="" class="btn btn-primary mt-3 w-100">Pesan Lagi</a>';
  echo '</div>';
} else {
  echo '<form method="post" class="mx-auto" style="max-width:400px;background:var(--card);border-radius:18px;box-shadow:0 2px 12px rgba(108,99,255,0.07);padding:18px;">';
  echo "<h4 class='mb-3' style='color:var(--primary);'>Pilih Menu Makanan</h4>";
  foreach ($menu as $nama => $harga) {
    echo '<div class="input-group mb-2">';
    echo '<div class="input-group-text">';
    echo '<input class="form-check-input mt-0" type="checkbox" name="menu[]" value="'.$nama.'">';
    echo '</div>';
    echo '<input type="text" class="form-control" value="'.$nama.'" readonly style="background:#f3f0ff;font-weight:600;">';
    echo '<span class="input-group-text" style="background:#e0e7ff;">Rp '.number_format($harga,0,',','.').'</span>';
    echo '<input type="number" min="1" max="10" name="jumlah[]" class="form-control" value="1" style="width:70px;">';
    echo '</div>';
  }
  echo '<button type="submit" name="pesan" class="btn btn-primary w-100 mt-3">Pesan Sekarang</button>';
  echo '</form>';
}
echo "</div>";

echo '<div class="glass-card">';
echo "<h1>Admin: Terima Pesanan</h1>";
session_start();
// Simpan pesanan ke session jika ada pesanan baru
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pesan'])) {
  $pesananBaru = [
    'menu' => $_POST['menu'] ?? [],
    'jumlah' => $_POST['jumlah'] ?? [],
    'waktu' => date('Y-m-d H:i:s')
  ];
  if (!isset($_SESSION['daftar_pesanan'])) {
    $_SESSION['daftar_pesanan'] = [];
  }
  $_SESSION['daftar_pesanan'][] = $pesananBaru;
}
// Admin menerima pesanan
if (isset($_GET['terima']) && isset($_SESSION['daftar_pesanan'][$_GET['terima']])) {
  $_SESSION['daftar_pesanan'][$_GET['terima']]['diterima'] = true;
  echo "<div class='alert alert-success'>Pesanan #" . ($_GET['terima']+1) . " telah diterima!</div>";
}
// Tampilkan daftar pesanan
if (!empty($_SESSION['daftar_pesanan'])) {
  echo "<div class='table-responsive'><table class='table table-bordered'>";
  echo "<thead><tr><th>#</th><th>Waktu</th><th>Pesanan</th><th>Status</th><th>Aksi</th></tr></thead><tbody>";
  foreach ($_SESSION['daftar_pesanan'] as $idx => $pesanan) {
    echo "<tr>";
    echo "<td>" . ($idx+1) . "</td>";
    echo "<td>" . htmlspecialchars($pesanan['waktu']) . "</td>";
    echo "<td>";
    if (!empty($pesanan['menu'])) {
      echo "<ul style='margin-bottom:0;'>";
      foreach ($pesanan['menu'] as $i => $makanan) {
        $jml = intval($pesanan['jumlah'][$i]);
        echo "<li>" . htmlspecialchars($makanan) . " <span class='badge'>$jml</span></li>";
      }
      echo "</ul>";
    }
    echo "</td>";
    echo "<td>";
    if (!empty($pesanan['diterima'])) {
      echo "<span class='badge bg-success'>Diterima</span>";
    } else {
      echo "<span class='badge bg-warning text-dark'>Menunggu</span>";
    }
    echo "</td>";
    echo "<td>";
    if (empty($pesanan['diterima'])) {
      echo "<a href='?terima=$idx' class='btn btn-success btn-sm w-100'>Terima</a>";
    } else {
      echo "-";
    }
    echo "</td>";
    echo "</tr>";
  }
  echo "</tbody></table></div>";
} else {
  echo "<p class='text-muted'>Belum ada pesanan masuk.</p>";
}
echo "</div>";
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>