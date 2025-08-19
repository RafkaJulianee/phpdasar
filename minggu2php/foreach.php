<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $usiakaryawa['Sesko']=33;
    $usiakaryawa['Matheus Cunha']=22;
    $usiakaryawa['Bernando Silva']=30;
    $usiakaryawa['Florian Wirtz']=25;
    foreach ($usiakaryawa as $nama=> $umur){
        echo "Nama Pemain:$nama <br> Usia $umur th <br>";
    }


    ?>
</body>
</html>