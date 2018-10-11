<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Programering</title>
</head>
<body>
  <form action="uppgift9.1.php" method="get">
   <input type="text" name="radie"><br>
    <input type="submit" value="OK">
  </form>
<?php
$radie = $_GET['radie'];
omkrets($radie);

?>

</body>
</html>


<?php
function omkrets ($radie)
{
 $omkrets = $radie * 3.14 * 2;
 echo $omkrets;

}

 ?>
