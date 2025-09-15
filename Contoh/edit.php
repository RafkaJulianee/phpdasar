<?php 
include 'koneksi.php';

// Ambil data berdasarkan ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// Update data jika form disubmit
if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $nis    = $_POST['nis'];
    $kelas  = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $update = "UPDATE tb_siswa SET nama='$nama', nis='$nis', kelas='$kelas', alamat='$alamat' WHERE id=$id";
    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        header {
            background: #2563eb;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            width: 50%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input, textarea, select {
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        button {
            padding: 12px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #1d4ed8;
        }
        .back {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }
        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>✏️ Edit Data Siswa</h1>
    </header>

    <div class="container">
        <h2>Form Edit Siswa</h2>
        <form method="POST">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" value="<?= $row['nama'] ?>" required>
            </div>
            <div>
                <label>NIS</label>
                <input type="text" name="nis" value="<?= $row['nis'] ?>" required>
            </div>
           <div>
    <label>Kelas</label>
    <input type="number" name="kelas" placeholder="Masukkan kelas (contoh: 10)" required>
</div>

                <label>Alamat</label>
                <textarea name="alamat" required><?= $row['alamat'] ?></textarea>
            </div>
            <button type="submit" name="submit">Simpan Perubahan</button>
        </form>
        <a class="back" href="index.php">← Kembali ke Data Siswa</a>
    </div>
</body>
</html>
