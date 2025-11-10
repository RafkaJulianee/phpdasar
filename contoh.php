

<?php
session_start();

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_siswarpl1");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$error = "";

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM tbl_user WHERE username = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $hasil = $stmt->get_result();

    if ($hasil->num_rows > 0) {
        $data = $hasil->fetch_assoc();

        // PERBAIKAN: Gunakan password biasa (tidak di-hash)
        // Karena di register password disimpan sebagai plain text
        if ($password === $data['password']) {
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role']; // Simpan role di session
            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Akun tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <main>
        <section class="form">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                </svg>      
            </div>

            <h1 class="form__title">Welcome Back!</h1>
            <p class="form__description">Please log in to continue</p>

            <?php if (!empty($error)) : ?>
                <div class="error-message"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <label class="form-control__label">Username</label>
                <input type="text" name="username" class="form-control" required value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
        
                <label class="form-control__label">Password</label>
                <div class="password-field">
                    <input type="password" name="password" class="form-control" minlength="4" id="password" required>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </div>

                <div class="password__settings">
                    <label class="password__settings__remember">
                        <input type="checkbox">
                        <span class="custom__checkbox">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>                              
                        </span>
                        Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
        
                <button type="submit" class="form__submit" id="submit">Log In</button>
            </form>
        
            <p class="form__footer">
                Don't have an account?<br> <a href="register.php">Create an account</a>
            </p>
        </section>
        
        <section class="form__animation">
            <div id="ball">
                <div class="ball">
                    <div id="face">
                        <div class="ball__eyes">
                            <div class="eye_wrap"><span class="eye"></span></div>
                            <div class="eye_wrap"><span class="eye"></span></div>
                        </div>
                        <div class="ball__mouth"></div>
                    </div>
                </div>
              </div>
              <div class="ball__shadow"></div>
        </section>
    </main>
</body>
</html>