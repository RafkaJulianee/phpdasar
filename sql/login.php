<?php
$conn = mysqli_connect("localhost", "root", "", "login_system");
session_start();

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user["password"])) {
      $_SESSION["login"] = true;
      $_SESSION["nama"] = $user["nama"];
      header("Location: beranda.php");
      exit;
    } else {
      echo "<script>alert('Password salah!');</script>";
    }
  } else {
    echo "<script>alert('Email tidak ditemukan!');</script>";
  }
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #3f0d99, #6600cc);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #1c1c2b;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.4);
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
      background: #2b2b40;
      color: white;
      transition: 0.3s;
    }
    input:focus {
      outline: 2px solid #6600cc;
    }
    button {
      width: 100%;
      padding: 0.75rem;
      background: #6600cc;
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background: #8021f0;
    }
    .register-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }
    .register-link a {
      color: #aaaaff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Masuk</h2>
    <form method="POST" action="login.php">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Masuk</button>
    </form>
    <div class="register-link">
      Belum punya akun? <a href="register.php">Daftar di sini</a>
    </div>
  </div>
</body>
</html>
