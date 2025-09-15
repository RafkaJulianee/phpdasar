<?php 
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa XIRPL1</title>
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cossette+Titre:wght@400;700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
  <h1>Data Siswa XIRPL1</h1>

  <?php
 
  $tables = [];
  $result = mysqli_query($conn, "SHOW TABLES");
  while ($row = mysqli_fetch_array($result)) {
      $tables[] = $row[0];
  }


  foreach ($tables as $table) {
      echo "<h2>Tabel: $table</h2>";

      $data = mysqli_query($conn, "SELECT * FROM `$table`");
      if (mysqli_num_rows($data) > 0) {
          echo "<table border='1' cellpadding='5' cellspacing='0'>";
          $fields = mysqli_fetch_fields($data);
          echo "<tr>";
          foreach ($fields as $field) {
              echo "<th>{$field->name}</th>";
          }
          echo "</tr>";

          while ($row = mysqli_fetch_assoc($data)) {
              echo "<tr>";
              foreach ($fields as $field) {
                  echo "<td>" . htmlspecialchars($row[$field->name]) . "</td>";
              }
              echo "</tr>";
          }

          echo "</table><br>";
      } else {
          echo "<p><i>Tabel kosong</i></p>";
      }
  }
  ?>
</body>
</html>
