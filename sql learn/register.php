<?php
$conn = mysqli_connect("localhost", "root", "", "login_system");

if (isset($_POST["submit"])) {
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $cek = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Email sudah terdaftar!');</script>";
  } else {
    mysqli_query($conn, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')");
    echo "<script>alert('Berhasil daftar! Silakan login'); window.location='login.php';</script>";
  }
}
?>



<!DOCTYPE html>

<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buat Akun</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {margin: 0; padding: 0; box-sizing: border-box;}
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #6f00ff, #9c27b0);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #1e1e2f;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.5);
      width: 100%;
      max-width: 400px;
    }
    .card h2 {
      text-align: center;
      margin-bottom: 1rem;
    }
    input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: none;
      border-radius: 10px;
      background: #2e2e42;
      color: white;
      transition: 0.3s;
    }
    input:focus {
      outline: 2px solid #9c27b0;
    }
    button {
      width: 100%;
      padding: 0.75rem;
      background: #9c27b0;
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #b139cc;
    }
    .login-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }
    .login-link a {
      color: #aaaaff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Buat Akun</h2>
    <form method="POST" action="register.php">
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="submit">Daftar</button>
    </form>
    <div class="login-link">
      Sudah punya akun? <a href="login.php">Masuk di sini</a>
    </div>
  </div>
</body>
</html>
