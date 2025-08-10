<?php
$produk = [
    1=>["nama"=>"Kaos Polos","harga"=>75000],
    2=>["nama"=>"Hoodie Keren","harga"=>150000],
    3=>["nama"=>"Sepatu Sport","harga"=>320000],
    4=>["nama"=>"Jam Tangan","harga"=>210000]
];
$pesanan = file_exists('data/pesanan.json') ? json_decode(file_get_contents('data/pesanan.json'),1) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - JanaShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg,#48c6ef 0%,#6c63ff 100%); font-family:'Inter',sans-serif; }
        .navbar { background: #fff; box-shadow:0 2px 12px #6c63ff22; }
        .navbar-brand { color:#6c63ff; font-weight:700; }
        .card { border-radius:18px; box-shadow:0 4px 16px #6c63ff11; }
        .badge { background:#ffd166; color:#6c63ff; font-weight:600; }
        @media (max-width:600px){ .container{padding:0.7rem;} }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg mb-3">
  <div class="container">
    <a class="navbar-brand" href="index.php">JanaShop</a>
  </div>
</nav>
<div class="container">
  <h2 class="mb-3" style="color:#6c63ff;font-weight:700;">Daftar Pesanan</h2>
  <?php if(!$pesanan): ?>
    <div class="alert alert-info">Belum ada pesanan masuk.</div>
  <?php else: ?>
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Waktu</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pesanan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($pesanan as $i=>$p): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?=$p['waktu']?></td>
              <td><?=$p['nama']?></td>
              <td><?=$p['alamat']?></td>
              <td><?=$p['nohp']?></td>
              <td>
                <ul>
                  <?php foreach($p['pesanan'] as $id=>$qty): ?>
                    <li><?=$produk[$id]['nama']?> x <?=$qty?></li>
                  <?php endforeach; ?>
                </ul>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>
</div>
</body>
</html>