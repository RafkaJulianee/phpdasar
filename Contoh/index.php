<?php 
include 'koneksi.php'; 
$result = mysqli_query($conn, "SELECT * FROM tb_siswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        header {
            background: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 25px;
            background: #ffffff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .toolbar h2 {
            margin: 0;
            color: black;
        }
        .toolbar a {
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        .toolbar a:hover {
            background: #1d4ed8;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0;
        }
        th, td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background: #2563eb;
            color: white;
            font-size: 15px;
        }
        tr:nth-child(even) {
            background: #f9fafb;
        }
        tr:hover {
            background: #e0e7ff;
        }
        .aksi a {
            padding: 6px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            margin: 0 3px;
        }
        .edit { background: #facc15; color: #000; }
        .hapus { background: #ef4444; color: white; }
        .edit:hover { background: #eab308; }
        .hapus:hover { background: #dc2626; }
    </style>
</head>
<body>
    <header>
        <h1>Murid Julianzhao</h1>
    </header>

    <div class="toolbar">
        <h2>Daftar Siswa</h2>
        <a href="tambah.php">+ Tambah Siswa</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nis'] ?></td>
            <td><?= $row['kelas'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td class="aksi">
                <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
