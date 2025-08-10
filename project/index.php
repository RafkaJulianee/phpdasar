<?php

session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
// Produk bisa dari database, json, atau array
$produk = [
    ["id"=>1,"nama"=>"Kaos Polos","harga"=>75000,"img"=>"assets/kaos.jpg"],
    ["id"=>2,"nama"=>"Hoodie Keren","harga"=>150000,"img"=>"assets/hoodie.jpg"],
    ["id"=>3,"nama"=>"Sepatu Sport","harga"=>320000,"img"=>"assets/sepatu.jpg"],
    ["id"=>4,"nama"=>"Jam Tangan","harga"=>210000,"img"=>"assets/jam.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JanaShop - E-Commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg,#48c6ef 0%,#6c63ff 100%); font-family:'Inter',sans-serif; }
        .navbar { background: #fff; box-shadow:0 2px 12px #6c63ff22; }
        .navbar-brand { color:#6c63ff; font-weight:700; }
        .card { border-radius:18px; box-shadow:0 4px 16px #6c63ff11; }
        .btn-primary { background:linear-gradient(90deg,#6c63ff,#48c6ef); border:none; border-radius:12px; font-weight:600; }
        .btn-primary:active { background:#6c63ff; }
        .badge { background:#ffd166; color:#6c63ff; font-weight:600; }
        .product-img { width:100%; height:180px; object-fit:cover; border-radius:14px 14px 0 0; }
        .cart-btn { position:fixed; bottom:24px; right:24px; z-index:99; border-radius:50%; width:60px; height:60px; font-size:1.7rem; box-shadow:0 4px 16px #6c63ff44; }
        @media (max-width:600px){ .product-img{height:120px;} .container{padding:0.7rem;} }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg mb-3">
  <div class="container">
    <a class="navbar-brand" href="#">JanaShop</a>
    <a href="cart.php" class="btn btn-primary position-relative">
      🛒
      <?php if(count($_SESSION['cart'])): ?>
        <span class="badge position-absolute top-0 start-100 translate-middle"><?=count($_SESSION['cart'])?></span>
      <?php endif; ?>
    </a>
  </div>
</nav>
<div class="container">
  <h2 class="mb-3" style="color:#6c63ff;font-weight:700;">Katalog Produk</h2>
  <div class="row g-3">
    <?php foreach($produk as $p): ?>
      <div class="col-6 col-md-3">
        <div class="card h-100">
          <img src="<?=$p['img']?>" class="product-img" alt="<?=$p['nama']?>">
          <div class="card-body text-center">
            <h5 class="card-title"><?=$p['nama']?></h5>
            <p class="card-text mb-2"><span class="badge">Rp <?=number_format($p['harga'],0,',','.')?></span></p>
            <form method="post" action="cart.php">
              <input type="hidden" name="id" value="<?=$p['id']?>">
              <button class="btn btn-primary w-100" type="submit" name="add">Tambah ke Keranjang</button>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<a href="cart.php" class="btn btn-primary cart-btn d-lg-none">🛒</a>
</body>
</html>