<?php
session_start();
if (!isset($_SESSION['cart']) || !$_SESSION['cart']) {
    header("Location: index.php"); exit;
}
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['nama'])) {
    // Simpan pesanan ke file atau database
    $nama = $_POST['nama'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $nohp = $_POST['nohp'] ?? '';
    $pesanan = $_SESSION['cart'];
    $data = [
        'nama'=>$nama,
        'alamat'=>$alamat,
        'nohp'=>$nohp,
        'pesanan'=>$pesanan,
        'waktu'=>date('Y-m-d H:i:s')
    ];
    if (!is_dir('data')) mkdir('data');
    $all = file_exists('data/pesanan.json') ? json_decode(file_get_contents('data/pesanan.json'),1) : [];
    $all[] = $data;
    file_put_contents('data/pesanan.json', json_encode($all,JSON_PRETTY_PRINT));
    $_SESSION['cart'] = [];
    $sukses = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - JanaShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg,#48c6ef 0%,#6c63ff 100%); font-family:'Inter',sans-serif; }
        .navbar { background: #fff; box-shadow:0 2px 12px #6c63ff22; }
        .navbar-brand { color:#6c63ff; font-weight:700; }
        .card { border-radius:18px; box-shadow:0 4px 16px #6c63ff11; }
        .btn-primary { background:linear-gradient(90deg,#6c63ff,#48c6ef); border:none; border-radius:12px; font-weight:600; }
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
  <h2 class="mb-3" style="color:#6c63ff;font-weight:700;">Checkout</h2>
  <?php if(!empty($sukses)): ?>
    <div class="alert alert-success">Pesanan berhasil! Kami akan segera proses pesanan Anda.</div>
    <a href="index.php" class="btn btn-primary w-100">Kembali ke Beranda</a>
  <?php else: ?>
    <form method="post">
      <div class="mb-2">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
      </div>
      <div class="mb-2">
        <label>No HP</label>
        <input type="text" name="nohp" class="form-control" required>
      </div>
      <button class="btn btn-primary w-100" type="submit">Kirim Pesanan</button>
    </form>
  <?php endif; ?>
</div>
</body>
</html>