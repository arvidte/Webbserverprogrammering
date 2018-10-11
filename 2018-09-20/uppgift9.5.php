<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Uppgift 9.5</title>
</head>
<body>
  <form action="uppgift9.5.php" method="get">
   <input type="text" name="tal"><br>
    <input type="submit" value="OK">
  </form>
<?php
//echo   $_GET['tal'];
$tal = $_GET['tal'];
// innehåller $tal em siffra?
// PHP har färdiga funktioner för
// de flesta behov..
siffra($tal);
?>
</body>
</html>

<?php
function siffra ($x)
{
  if (is_mumeric($x)){
  echo "$x är en siffra<br>";
}
  else {
    echo "$x är ingen siffra<br>";
  }

}
 ?>
