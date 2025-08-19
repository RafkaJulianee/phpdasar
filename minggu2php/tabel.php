<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Tabel</title>
    <body>
        <style>
          body {

       font-family: 'Inter', Arial, sans-serif;
    }
    </style>

    </body>
</head>
<body>
    <?php
    echo "<h1>Tabel</h1>";
    echo "<table border='1'>
    <th>No</th>
    <th>Jumlah Sikat</th>
    <th>Harga</th></tr>";
    $jumlah=5;
    $harga=2000;
    $no=1;
    while ($jumlah <=100){
        echo "<tr><td>";
        echo $no++;
        echo "</td><td>";
        echo $jumlah;
        echo "</td><td>";
        echo $jumlah * $harga;
        echo "</td></tr>";
        $jumlah +=10;


    }

    


    ?>
</body>
</html>