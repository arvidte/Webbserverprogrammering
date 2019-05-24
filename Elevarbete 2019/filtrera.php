<?php

include_once "settings.php"
 ?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Data från formular.php skickas hit</title>
</head>
<body>

  <table border="2">


  <?php
  $sokstrang=$_POST['sokstrang'];
  $val=$_POST['val'];
  try {

  if ($val=='fnamn'){
   $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT * FROM tb_medlemmar WHERE `fnamn` LIKE '".$sokstrang."%'");
   while ( $row = $stmt->fetch() ) {
    echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";
   }
  }

  else if ($val=='enamn') {
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT * FROM tb_medlemmar WHERE `enamn` LIKE '".$sokstrang."%'");
    while ( $row = $stmt->fetch() ) {
     echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";
    }
  }

  $stmt = null;
  $dbh = null;
}
catch (PDOException $e) {
         echo 'Connection failed: ' . $e->getMessage();
         die();
        }
  ?>

</table>

</body>
</html>
