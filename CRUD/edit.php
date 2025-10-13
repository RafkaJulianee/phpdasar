Lewati ke konten
Riwayat obrolan

Anda bilang:
<?php 
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <!--
      ██╗██╗   ██╗██╗     ██╗ █████╗ ███╗   ██╗███████╗
      ██║██║   ██║██║     ██║██╔══██╗████╗  ██║██╔════╝
      ██║██║   ██║██║     ██║███████║██╔██╗ ██║█████╗  
 ██   ██║██║   ██║██║     ██║██╔══██║██║╚██╗██║██╔══╝  
 ╚█████╔╝╚██████╔╝███████╗██║██║  ██║██║ ╚████║███████╗
  ╚════╝  ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝
                R A F K A   J U L I A N
-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/profil1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: "Montserrat";
      }
    </style>

  </head>
  <body>
    <div class="container">
     <div class="container">
            <div class="cloud">
                  <span> <h2 style="font-family:Montserrat ;">Data Siswa</h2></span>
            </div>
        </div>

     <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>

     <table class="table">
        <thead class="table-blue">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $query = mysqli_query($conn, "SELECT * FROM siswa");
            while($row=mysqli_fetch_assoc($query)){
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td>
                        <?php
                        // Cek apakah ada foto di database dan filenya ada di server
                        if (!empty($row['foto']) && file_exists("uploads/" . $row['foto'])) {
                            // Tampilkan foto bulat menggunakan class bootstrap
                            echo '<img src="uploads/' . $row['foto'] . '" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="Foto ' . $row['nama'] . '">';
                        } else {
                            // Tampilkan placeholder jika tidak ada foto
                            echo '<img src="https://via.placeholder.com/50" class="rounded-circle" alt="Foto tidak tersedia">';
                        }
                        ?>
                    </td>
                    <td><?=$row['nis'];?></td>
                    <td><?=$row['nama'];?></td>
                    <td><?=$row['kelas'];?></td>
                    <td><?=$row['jenis_kelamin'];?></td>
                    <td><?=$row['alamat'];?></td>
                    <td><?=$row['no_hp'];?></td>
                    <td>
                        <a class="btn" style="color:green;" href="edit.php?nis=<?=$row['nis'];?>">Edit</a>
                        <a class="btn" style="color:red;" href="hapus.php?nis=<?=$row['nis'];?>"  onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
     </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html> hapus bagian foto nya
ChatGPT bilang:
Oke gas 🔥 — kalau kamu mau hapus bagian “Foto” dari tabel siswa (biar nggak muncul kolom & tampilan gambarnya), berikut versi kodenya yang udah dibersihin bagian foto-nya 👇

<?php 
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <!--
      ██╗██╗   ██╗██╗     ██╗ █████╗ ███╗   ██╗███████╗
      ██║██║   ██║██║     ██║██╔══██╗████╗  ██║██╔════╝
      ██║██║   ██║██║     ██║███████║██╔██╗ ██║█████╗  
 ██   ██║██║   ██║██║     ██║██╔══██║██║╚██╗██║██╔══╝  
 ╚█████╔╝╚██████╔╝███████╗██║██║  ██║██║ ╚████║███████╗
  ╚════╝  ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝
                R A F K A   J U L I A N
-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="img/profil1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
      body{
        font-family: "Montserrat";
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="container">
        <div class="cloud">
          <span><h2 style="font-family:Montserrat;">Data Siswa</h2></span>
        </div>
      </div>

      <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>

      <table class="table">
        <thead class="table-blue">
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query = mysqli_query($conn, "SELECT * FROM siswa");
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['nis']; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['kelas']; ?></td>
              <td><?= $row['jenis_kelamin']; ?></td>
              <td><?= $row['alamat']; ?></td>
              <td><?= $row['no_hp']; ?></td>
              <td>
                <a class="btn" style="color:green;" href="edit.php?nis=<?= $row['nis']; ?>">Edit</a>
                <a class="btn" style="color:red;" href="hapus.php?nis=<?= $row['nis']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
🧹 Yang dihapus:

Kolom <th>Foto</th> di bagian <thead>.

Sel foto di <tbody> beserta script PHP-nya (if (!empty($row['foto'])...).

Sekarang tabel kamu clean — langsung tampil data teks aja, tanpa kolom gambar 🎯

Mau sekalian saya bantu tambahin pencarian (search bar) di atas tabel biar makin keren dan interaktif juga?

Anda bilang:
<?php
include "koneksi.php";

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jk     = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp   = $_POST['nohp'];
    
    // --- BARU: LOGIKA UNTUK UPLOAD FOTO ---
    $foto_nama = $_FILES['foto']['name'];
    $foto_tmp  = $_FILES['foto']['tmp_name'];
    $nama_file_baru = ""; // Variabel untuk menyimpan nama file di database

    // Cek jika ada file yang diupload
    if (!empty($foto_nama)) {
        // Buat nama file yang unik untuk menghindari duplikasi
        $nama_file_baru = uniqid() . '-' . basename($foto_nama);
        $target_dir = "uploads/";
        $target_file = $target_dir . $nama_file_baru;

        // Pindahkan file dari temporary location ke folder uploads
        move_uploaded_file($foto_tmp, $target_file);
    }
    // --- AKHIR BAGIAN BARU ---

    // Cek apakah NIS sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('NIS sudah ada, silakan gunakan yang lain!'); window.location='tambah.php';</script>";
    } else {
        // --- MODIFIKASI: Tambahkan kolom dan variabel 'foto' ke query INSERT ---
        $query = "INSERT INTO siswa (nis, nama, kelas, jenis_kelamin, alamat, no_hp, foto) 
                  VALUES ('$nis', '$nama', '$kelas', '$jk', '$alamat', '$nohp', '$nama_file_baru')";
        
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
  <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* CSS TIDAK DIUBAH SAMA SEKALI, SESUAI PERMINTAAN */
    body {
         font-family: "Montserrat", sans-serif;
         margin: 20px;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"],
    select {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 250px;
    }
    input[type="submit"] {
      background-color: blue;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }
    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <h2>Isi Bio Data Siswa</h2>
  <form action="" method="post" onsubmit="return validasi()" enctype="multipart/form-data">
    <label>NIS:</label>
    <input type="number" name="nis" id="nis"><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" id="nama"><br><br>

    <label>Kelas:</label>
    <select name="kelas" id="kelas">
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1">XI-RPL1</option>
      <option value="XI-RPL2">XI-RPL2</option>
      </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" id="alamat"><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" id="nohp"><br><br>

    <label>Foto:</label>
    <input type="file" name="foto" id="foto" accept="image/*" onchange="tampilkanPreview(this, 'previewFoto')"><br><br>
    
    <label></label> <img id="previewFoto" width="150" style="margin-bottom: 10px;">
    <br><br>
    <input type="submit" value="Simpan">
    <a href="index.php">Kembali</a>
  </form>

  <script>
    function sayhallo() {
      var nm = document.getElementById('nis').value;
      alert("Hallo, " + nm);
    }

    // --- BARU: Fungsi untuk menampilkan preview gambar ---
    function tampilkanPreview(input, idPreview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById(idPreview).src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function validasi() {
      var nis = document.getElementById("nis").value;
      if (nis == "") {
        alert("NIS harus diisi!");
        return false;
      }
      var nama = document.getElementById("nama").value;
      if (nama == "") {
        alert("Nama harus diisi!");
        return false;
      }
      var kelas = document.getElementById("kelas").value;
      if (kelas == "") {
        alert("Kelas harus dipilih!");
        return false;
      }
      var jk = document.querySelector('input[name="jk"]:checked');
      if (!jk) {
        alert("Jenis Kelamin harus dipilih!");
        return false;
      }
      var alamat = document.getElementById("alamat").value;
      if (alamat == "") {
        alert("Alamat harus diisi!");
        return false;
      }
      var nohp = document.getElementById("nohp").value;
      if (nohp == "") {
        alert("No HP harus diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>
</html> yang ini juga hapus bgain tambah foto
ChatGPT bilang:
Siap, bro 😎🔥 — berikut versi kode “Tambah Data Siswa” kamu yang udah dihapus semua bagian upload & preview foto-nya, tapi tetap rapi dan jalan normal tanpa error.

<?php
include "koneksi.php";

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jk     = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp   = $_POST['nohp'];

    // Cek apakah NIS sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('NIS sudah ada, silakan gunakan yang lain!'); window.location='tambah.php';</script>";
    } else {
        // Simpan data tanpa kolom foto
        $query = "INSERT INTO siswa (nis, nama, kelas, jenis_kelamin, alamat, no_hp) 
                  VALUES ('$nis', '$nama', '$kelas', '$jk', '$alamat', '$nohp')";
        
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
  <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
         font-family: "Montserrat", sans-serif;
         margin: 20px;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"],
    select {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 250px;
    }
    input[type="submit"] {
      background-color: blue;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }
    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <h2>Isi Bio Data Siswa</h2>
  <form action="" method="post" onsubmit="return validasi()">
    <label>NIS:</label>
    <input type="number" name="nis" id="nis"><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" id="nama"><br><br>

    <label>Kelas:</label>
    <select name="kelas" id="kelas">
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1">XI-RPL1</option>
      <option value="XI-RPL2">XI-RPL2</option>
    </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" id="alamat"><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" id="nohp"><br><br>

    <input type="submit" value="Simpan">
    <a href="index.php">Kembali</a>
  </form>

  <script>
    function validasi() {
      var nis = document.getElementById("nis").value;
      if (nis == "") {
        alert("NIS harus diisi!");
        return false;
      }
      var nama = document.getElementById("nama").value;
      if (nama == "") {
        alert("Nama harus diisi!");
        return false;
      }
      var kelas = document.getElementById("kelas").value;
      if (kelas == "") {
        alert("Kelas harus dipilih!");
        return false;
      }
      var jk = document.querySelector('input[name="jk"]:checked');
      if (!jk) {
        alert("Jenis Kelamin harus dipilih!");
        return false;
      }
      var alamat = document.getElementById("alamat").value;
      if (alamat == "") {
        alert("Alamat harus diisi!");
        return false;
      }
      var nohp = document.getElementById("nohp").value;
      if (nohp == "") {
        alert("No HP harus diisi!");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>
📌 Yang dihapus total:

Semua elemen <input type="file" name="foto">

Preview foto <img id="previewFoto">

Fungsi JavaScript tampilkanPreview()

Logika upload & variabel $foto_nama, $foto_tmp, $nama_file_baru

Kolom foto di query INSERT

Sekarang form tambah siswa-nya clean ✨ — fokus ke data teks aja tanpa ganggu upload foto.
Mau sekalian saya ubah tampilannya jadi versi modern (dark mode + tombol keren) biar UI-nya nggak plain?

Anda bilang:
<?php
include "koneksi.php";

// Cek apakah ada nis di URL
if (!isset($_GET['nis'])) {
    echo "<script>alert('NIS tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$nis = $_GET['nis'];
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");

// Cek apakah data siswa ada
if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data siswa tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$data = mysqli_fetch_assoc($query);

// Update data setelah form disubmit
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jenis  = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['nohp'];

    // --- BARU: LOGIKA UNTUK UPDATE FOTO ---
    $foto_lama = $_POST['foto_lama'];
    $nama_file_baru = $foto_lama; // Default, gunakan nama file lama

    // Cek apakah user mengupload file foto baru
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0 && !empty($_FILES['foto']['name'])) {
        // Hapus foto lama jika ada
        if (!empty($foto_lama) && file_exists("uploads/" . $foto_lama)) {
            unlink("uploads/" . $foto_lama);
        }

        // Proses upload foto baru
        $foto_nama = $_FILES['foto']['name'];
        $foto_tmp  = $_FILES['foto']['tmp_name'];
        $nama_file_baru = uniqid() . '-' . basename($foto_nama);
        $target_dir = "uploads/";
        $target_file = $target_dir . $nama_file_baru;
        move_uploaded_file($foto_tmp, $target_file);
    }
    // --- AKHIR LOGIKA FOTO ---

    // --- MODIFIKASI: Tambahkan 'foto' ke query UPDATE ---
    $update = mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jenis_kelamin='$jenis',
        alamat='$alamat',
        no_hp='$no_hp',
        foto='$nama_file_baru'
        WHERE nis='$nis'
    ");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal update data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<!--
      ██╗██╗   ██╗██╗     ██╗ █████╗ ███╗   ██╗███████╗
      ██║██║   ██║██║     ██║██╔══██╗████╗  ██║██╔════╝
      ██║██║   ██║██║     ██║███████║██╔██╗ ██║█████╗  
 ██   ██║██║   ██║██║     ██║██╔══██║██║╚██╗██║██╔══╝  
 ╚█████╔╝╚██████╔╝███████╗██║██║  ██║██║ ╚████║███████╗
  ╚════╝  ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝
                R A F K A   J U L I A N
-->


<head>
  <meta charset="UTF-8">
  <title>Edit</title>
  <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      margin: 20px;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"],
    select,
    textarea {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 250px;
    }
    input[type="submit"] {
      background-color: blue;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }
    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <h2>Edit Data Siswa</h2>
  <form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="foto_lama" value="<?=$data['foto'];?>">

    <label>NIS:</label>
    <input type="number" name="nis" value="<?=$data['nis'];?>" readonly><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?=$data['nama'];?>" required><br><br>

    <label>Kelas:</label>
    <select name="kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1" <?=$data['kelas']=="XI-RPL1"?"selected":"";?>>XI-RPL1</option>
      <option value="XI-RPL2" <?=$data['kelas']=="XI-RPL2"?"selected":"";?>>XI-RPL2</option>
      </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki" <?=$data['jenis_kelamin']=="Laki-Laki"?"checked":"";?>>Laki-Laki
    <input type="radio" name="jk" value="Perempuan" <?=$data['jenis_kelamin']=="Perempuan"?"checked":"";?>>Perempuan
    <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" value="<?=$data['alamat'];?>" required><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" value="<?=$data['no_hp'];?>" required><br><br>

    <label>Foto Saat Ini:</label>
    <?php
        $path_foto = "uploads/" . $data['foto'];
        if (!empty($data['foto']) && file_exists($path_foto)) {
            echo '<img id="previewFoto" src="' . $path_foto . '" width="100" style="margin-bottom:10px;">';
        } else {
            echo '<img id="previewFoto" src="https://via.placeholder.com/100" width="100" style="margin-bottom:10px;">';
        }
    ?>
    <br>
    <label>Ganti Foto:</label>
    <input type="file" name="foto" accept="image/*" onchange="tampilkanPreview(this, 'previewFoto')"><br><br>
    <input type="submit" name="update" value="Update">
    <a href="index.php">Kembali</a>
  </form>

  <script>
    function tampilkanPreview(input, idPreview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById(idPreview).src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
</body>
</html> ini juga hapus
ChatGPT bilang:
Siap banget bro 😎🔥
Berikut versi edit data siswa tanpa bagian foto sama sekali — semua logika upload, preview, dan kolom foto udah aku hapus total biar clean & aman dari error.

<?php
include "koneksi.php";

// Cek apakah ada nis di URL
if (!isset($_GET['nis'])) {
    echo "<script>alert('NIS tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$nis = $_GET['nis'];
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE nis='$nis'");

// Cek apakah data siswa ada
if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Data siswa tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$data = mysqli_fetch_assoc($query);

// Update data setelah form disubmit
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $jenis  = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['nohp'];

    // Update tanpa kolom foto
    $update = mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        kelas='$kelas',
        jenis_kelamin='$jenis',
        alamat='$alamat',
        no_hp='$no_hp'
        WHERE nis='$nis'
    ");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal update data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<!--
      ██╗██╗   ██╗██╗     ██╗ █████╗ ███╗   ██╗███████╗
      ██║██║   ██║██║     ██║██╔══██╗████╗  ██║██╔════╝
      ██║██║   ██║██║     ██║███████║██╔██╗ ██║█████╗  
 ██   ██║██║   ██║██║     ██║██╔══██║██║╚██╗██║██╔══╝  
 ╚█████╔╝╚██████╔╝███████╗██║██║  ██║██║ ╚████║███████╗
  ╚════╝  ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝
                R A F K A   J U L I A N
-->

<head>
  <meta charset="UTF-8">
  <title>Edit</title>
  <link rel="shortcut icon" href="kucing.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      margin: 20px;
    }
    label {
      display: inline-block;
      width: 120px;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"],
    select,
    textarea {
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 250px;
    }
    input[type="submit"] {
      background-color: blue;
      border: none;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }
    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <h2>Edit Data Siswa</h2>
  <form method="POST">
    <label>NIS:</label>
    <input type="number" name="nis" value="<?=$data['nis'];?>" readonly><br><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?=$data['nama'];?>" required><br><br>

    <label>Kelas:</label>
    <select name="kelas" required>
      <option value="">Pilih Kelas</option>
      <option value="XI-RPL1" <?=$data['kelas']=="XI-RPL1"?"selected":"";?>>XI-RPL1</option>
      <option value="XI-RPL2" <?=$data['kelas']=="XI-RPL2"?"selected":"";?>>XI-RPL2</option>
    </select><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" name="jk" value="Laki-Laki" <?=$data['jenis_kelamin']=="Laki-Laki"?"checked":"";?>>Laki-Laki
    <input type="radio" name="jk" value="Perempuan" <?=$data['jenis_kelamin']=="Perempuan"?"checked":"";?>>Perempuan
    <br><br>

    <label>Alamat:</label>
    <input type="text" name="alamat" value="<?=$data['alamat'];?>" required><br><br>

    <label>No Hp:</label>
    <input type="number" name="nohp" value="<?=$data['no_hp'];?>" required><br><br>

    <input type="submit" name="update" value="Update">
    <a href="index.php">Kembali</a>
  </form>
</body>
</html>
