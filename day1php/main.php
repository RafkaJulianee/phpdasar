<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php|Dasar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    * {
      margin: 0;
    }

    body {

      font-family: Arial, sans-serif;
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
  <h1>Tugas 1🏫</h1>

  <?php
     $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat",
 "Sabtu", "Minggu"];//array hari

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

 $x=1000;
 $y=2000;
 echo $x+$y;



 

 





    ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <script>

  </script>
</body>

</html>