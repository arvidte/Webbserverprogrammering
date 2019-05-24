
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


  <h3>Filtrera</h3>
    <form action="filtrera.php" method="post">
  Förnamn<input type="radio" name="val" value="fnamn"><br>
  Efternamn<input type="radio" name="val" value="efnamn"><br>
  Telefonummer<input type="radio" name="val" value="tfn"><br>
    <input type="text" name="sokstrang">
    <input type="submit">
  </form>
  <br>
<table border="2">
<tr><th>Förnamn</th><th>Efternamn</th><th>Telefon</th></tr>

<?php

$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
$stmt = $db->query("SELECT * FROM `tb_medlemmar`");

while ($row = $stmt->fetch()) {
              echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";
        }
?>

</table>

</body>
</html>
