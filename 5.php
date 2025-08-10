
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #818cf8;
            --accent: #fbbf24;
            --background: #f8fafc;
            --text: #1f2937;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--background) 0%, #e0e7ff 100%);
            color: var(--text);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%) !important;
            box-shadow: 0 4px 16px rgba(99,102,241,0.1);
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: 600;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(99,102,241,0.1);
            padding: 2rem;
            margin: 1.5rem 0;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        h1 {
            color: var(--primary);
            font-weight: 700;
            text-align: center;
            margin: 2rem 0;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid var(--primary);
            box-shadow: 0 4px 16px rgba(99,102,241,0.15);
            margin: 0 auto 1rem auto;
            display: block;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            font-weight: 600;
        }

        .table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
        }

        .badge {
            font-weight: 500;
        }

        marquee {
            color: var(--primary);
            font-weight: 600;
            margin: 1rem 0;
        }

        hr {
            border-color: var(--primary);
            opacity: 0.1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RafkaJulian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tugas">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pesanan">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card text-center">
            <img src="image.png" alt="Profile" class="profile-img">
            <h2>Rafka Julian Pratama</h2>
            <p>XI-RPL1</p>
            <marquee>"Kumpulan Tugas PHP"</marquee>
        </div>

        <?php
           $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat",
 "Sabtu", "Minggu"];//array hari
echo '<div style="text-align:center;">';
echo "Hari " . $hari[0] . " = Sekolah<br>";//menampilkan hari
echo "Hari " . $hari[1] . " = Sekolah<br>";
echo "Hari " . $hari[2] . " = Sekolah<br>";
echo "Hari " . $hari[3] . " = Sekolah<br>";
echo "Hari " . $hari[4] . " = Sekolah<br>";
echo "Hari " . $hari[5] . " = Libur<br>";
echo "Hari " . $hari[6] . " = Libur<br>";
echo "<br>";
echo "<hr>";

echo "   <h1>Tugas 2🍇</h1>";
$buah["Anggur"]=10;
$buah["Apel"]=20;
$buah["Naga"]=5;
$buah["Jambu"]=2;

 echo "Buah Anggur Ada:".$buah["Anggur"]."<br>";
 echo "Buah Apel Ada:".$buah["Apel"]."<br>";
 echo "Buah Naga Ada:".$buah["Naga"]."<br>";
 echo "Buah Jambu Ada:".$buah["Jambu"]."<br>";
 echo "<hr>";
 echo "   <h1>Tugas 3🚀</h1>";

 //if stetmen
 $nama="Rafka Julian Pratama";
if ($nama=="Rafka Julian Pratama"){
  echo "Nama Kamu Adalah:".  "$nama"."<br>";

}else echo"Gagal";

//2
$usia =18;
if ($usia==18){
  echo"Boleh Masuk";
}else"Ga Boleh Masuk";
echo "<br>";

//3
$karyawan="Milk";
$boss="Choko";
if ($karyawan=="Milk") {
  echo "Hallo Karyawan";
} elseif ($karyawan=="Choko") {
  echo "Hallo Boos Choko";
} else {
  echo "Anda Bukan Bagian Kami ";
}

echo"<h1>Tugas 4 👾</h1>";
//looping
 for($i =1;$i<=10; $i++){
  echo "Hello World KE:$i<br>";
 }
 echo "<hr>";

 echo "<h1>Tugas 5</h1>";
 $nama ="Rafka Julian Pratama";
 $kelas="X RPL 1";
 $jurusan=["Rekayasa Perangkat Lunak","TKR","TJKT"];

 echo "anda berada di jurusan:". $jurusan [0].  "<br>" . "nama anda adalah". $nama . "<br>" ."anda berada di kelas". $kelas;
 

$uang=500004893849;
$hutang=10083273823;
$sisauang= $uang - $hutang;
echo "<br>";
echo "Sisa Uang Anda Adalah:".$sisauang;

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


echo "<hr>";
echo "<h1>Sistem Pemesanan Makanan 🍔</h1>";

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
  echo '<div class="card mx-auto" style="max-width:400px;background:#f1f5ff;border-radius:18px;box-shadow:0 2px 12px rgba(99,102,241,0.07);">';
  echo '<div class="card-body">';
  echo "<h4 class='card-title mb-3' style='color:#6366f1;'>Detail Pesanan</h4>";
  if (!empty($pesanan)) {
    echo "<ul class='list-group mb-3'>";
    foreach ($pesanan as $i => $makanan) {
      $jml = intval($jumlah[$i]);
      $harga = $menu[$makanan];
      $subtotal = $harga * $jml;
      $total += $subtotal;
      echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
      echo "<span>$makanan <span class='badge bg-primary rounded-pill'>$jml</span></span>";
      echo "<span>Rp " . number_format($subtotal, 0, ',', '.') . "</span>";
      echo "</li>";
    }
    echo "</ul>";
    echo "<h5 class='text-end' style='color:#fbbf24;'>Total: Rp " . number_format($total, 0, ',', '.') . "</h5>";
  } else {
    echo "<p class='text-danger'>Belum ada makanan yang dipilih.</p>";
  }
  echo '<a href="" class="btn btn-outline-primary mt-3">Pesan Lagi</a>';
  echo '</div></div>';
} else {
  echo '<form method="post" class="mx-auto" style="max-width:400px;background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(99,102,241,0.07);padding:24px;">';
  echo "<h4 class='mb-3' style='color:#6366f1;'>Pilih Menu Makanan</h4>";
  foreach ($menu as $nama => $harga) {
    echo '<div class="input-group mb-2">';
    echo '<div class="input-group-text">';
    echo '<input class="form-check-input mt-0" type="checkbox" name="menu[]" value="'.$nama.'">';
    echo '</div>';
    echo '<input type="text" class="form-control" value="'.$nama.'" readonly style="background:#f1f5ff;font-weight:600;">';
    echo '<span class="input-group-text" style="background:#e0e7ff;">Rp '.number_format($harga,0,',','.').'</span>';
    echo '<input type="number" min="1" max="10" name="jumlah[]" class="form-control" value="1" style="width:70px;">';
    echo '</div>';
  }
  echo '<button type="submit" name="pesan" class="btn btn-primary w-100 mt-3" style="background:linear-gradient(90deg,#6366f1 0%,#818cf8 100%);border:none;">Pesan Sekarang</button>';
  echo '</form>';
}

echo "<hr>";
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
        echo "<li>" . htmlspecialchars($makanan) . " <span class='badge bg-primary'>$jml</span></li>";
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
      echo "<a href='?terima=$idx' class='btn btn-success btn-sm'>Terima</a>";
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
 
          ?>

    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>