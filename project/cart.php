<?php

session_start();
$produk = [
    1=>["nama"=>"Kaos Polos","harga"=>75000,"img"=>"assets/kaos.jpg"],
    2=>["nama"=>"Hoodie Keren","harga"=>150000,"img"=>"assets/hoodie.jpg"],
    3=>["nama"=>"Sepatu Sport","harga"=>320000,"img"=>"assets/sepatu.jpg"],
    4=>["nama"=>"Jam Tangan","harga"=>210000,"img"=>"assets/jam.jpg"]
];
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
// Tambah ke keranjang
if (isset($_POST['add']) && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    if (!isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id]=1;
    else $_SESSION['cart'][$id]++;
    header("Location: cart.php");
    exit;
}
// Hapus item
if (isset($_GET['del'])) {
    unset($_SESSION['cart'][$_GET['del']]);
    header("Location: cart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keranjang - JanaShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg,#48c6ef 0%,#6c63ff 100%); font-family:'Inter',sans-serif; }
        .navbar { background: #fff; box-shadow:0 2px 12px #6c63ff22; }
        .navbar-brand { color:#6c63ff; font-weight:700; }
        .card { border-radius:18px; box-shadow:0 4px 16px #6c63ff11; }
        .btn-primary { background:linear-gradient(90deg,#6c63ff,#48c6ef); border:none; border-radius:12px; font-weight:600; }
        .btn-danger { border-radius:12px; }
        .badge { background:#ffd166; color:#6c63ff; font-weight:600; }
        .product-img { width:70px; height:70px; object-fit:cover; border-radius:12px; }
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
  <h2 class="mb-3" style="color:#6c63ff;font-weight:700;">Keranjang</h2>
  <?php if(!$_SESSION['cart']): ?>
    <div class="alert alert-info">Keranjang kosong.</div>
    <a href="index.php" class="btn btn-primary w-100">Belanja Sekarang</a>
  <?php else: ?>
    <form method="post" action="checkout.php">
      <ul class="list-group mb-3">
        <?php $total=0; foreach($_SESSION['cart'] as $id=>$qty): $p=$produk[$id]; $sub=$p['harga']*$qty; $total+=$sub; ?>
        <li class="list-group-item d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <img src="<?=$p['img']?>" class="product-img me-2">
            <div>
              <div style="font-weight:600;"><?=$p['nama']?></div>
              <div class="badge">Rp <?=number_format($p['harga'],0,',','.')?></div>
              <div>Qty: <?=$qty?></div>
            </div>
          </div>
          <a href="?del=<?=$id?>" class="btn btn-danger btn-sm ms-2">Hapus</a>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="mb-3 text-end" style="font-size:1.2rem;font-weight:700;">Total: Rp <?=number_format($total,0,',','.')?></div>
      <button class="btn btn-primary w-100" type="submit" name="checkout">Checkout</button>
    </form>
  <?php endif; ?>
</div>
</body>
</html>