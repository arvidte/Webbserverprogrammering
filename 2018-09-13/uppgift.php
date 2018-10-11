<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Fahrenheit</title>
</head>
<body>
<form action="uppgift.php" method="get">
  <input type="text" name="fahrenheit"><br>
  <input type="submit" value="Omvandla">
</form>
<?php
echo "Fahrenheit: ".$_GET['fahrenheit']."<br>";
$fahrenheit = $_GET['fahrenheit'];
$celsius = ($fahrenheit-32)/1.8;
echo "Blir uttryckt i celsius $celsius grader"
 ?>
</body>
</html>
