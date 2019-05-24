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


  <?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $fnamn=$_POST['fnamn'];
  $enamn=$_POST['enamn'];
  $tfn=$_POST['tfn'];

 try {
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $sql = "INSERT INTO tb_medlemmar (username,password,fnamn,enamn,tfn) VALUES ('$username','$password','$fnamn','$enamn','$tfn')";
  $stmt= $db->prepare($sql);
  $stmt->execute();
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>
<h1> Ny medlem har skapats </h1> <br>
<a href="index1.php">Logga in</a>
</body>
</html>
