<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Programering</title>
</head>
<body>
<form action="index.php" method="get">
<input type="text" name="tal1"><br>
<input type="text" name="tal2"><br>
<input type="submit">
</form>
<?php
// suberglobal variabel
// global variabel = variabel som synts överallt
echo "tal1: ".$_GET['tal1']."<br>";
echo "tal2: ".$_GET['tal2']."<br>";
$Tal1 = $_GET['tal1'];
$Tal2 = $_GET['tal2'];
echo "Tal1: ".$Tal1."<br>";
echo "Tal2: ".$Tal2."<br>";
$summa = $Tal1+$Tal2;
echo "Summan är $summa"

//jfr int i[4] tal1 är platsen (index) //
// i fältet $_GET, vi vill komma åt värdet
// Vi har tillgång till två inmatade ,äten
// Datatypen okänd!
 ?>
 <h1>Hej!</h1><br>
</body>
</html>
