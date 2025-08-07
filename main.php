<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php|Dasar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
      
    </style>
    
  <style>
    * {
      margin: 0;
    }

    body {

       font-family: 'Inter', Arial, sans-serif;
      background-color: white;
      color: #333;
      margin: 0;
      padding: 20px;

    }

    img {
      margin: 20px 0;

      display: block;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid #ccc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 50px;
      height: 100px;
      width: 100px;
    }
    body {
      background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
      min-height: 100vh;
    }

    .navbar {
      background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%) !important;
      box-shadow: 0 4px 16px rgba(99,102,241,0.1);
    }

    .navbar-brand, .nav-link, .dropdown-item {
      color: #fff !important;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .nav-link.active {
      color: #fbbf24 !important;
    }

    .navbar-toggler {
      border-color: #fbbf24;
    }

    .img img {
      border-radius: 50%;
      border: 4px solid #6366f1;
      box-shadow: 0 4px 16px rgba(99,102,241,0.15);
      margin-bottom: 10px;
    }

    .img p {
      color: #6366f1;
      font-weight: 600;
      margin-bottom: 0;
    }

    h1 {
      color: #6366f1;
      font-weight: 700;
      margin-top: 30px;
      margin-bottom: 20px;
      letter-spacing: 1px;
    }

    marquee {
      color: #fbbf24;
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 10px;
    
    }

    hr {
      border: none;
      border-top: 2px solid #6366f1;
      margin: 30px 0;
      width: 60%;
      margin-left: auto;
      margin-right: auto;
    }

    div[style*="text-align:center;"] {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 2px 12px rgba(99,102,241,0.07);
      padding: 24px 0;
      margin: 30px auto 20px auto;
      width: 80%;
      max-width: 600px;
    }

    @media (max-width: 600px) {
      .img img {
        width: 80px;
        height: 80px;
      }
      div[style*="text-align:center;"] {
        width: 98%;
        padding: 12px 0;
      }
    }

    marquee {
      color: black;
      font-size: 20px;
      font-weight: bold;
    }

    p {
      margin-left: 20px;
      text-align: center;

      font-size: 18px;
      color: #555;
    }

    h1 {
      text-align: center;
    }





  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RafkaJulianezhao</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Tugas">Tugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              lainya
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <img src="image copy 4.png" class="rounded float-start" alt="...">
  <img src="image copy 4.png" class="rounded float-end" alt="...">
  <h1>Tugas Php</h1>
  <div class="img">
    <img src="image.png" alt="">
    <p>Rafka </p>
    <p>XI-RPL1</p>
    <marquee behavior="" direction="">"Kumpulan Tugas<b> Php</b>";</marquee>
    <marquee behavior="" direction="">Rafka Julian Pratama</marquee>
    <hr>
  </div>
  <h1 id="tugas">Tugas 1🏫</h1>

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




















 



 

 





    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  
</body>

</html>