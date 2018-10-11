<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Porto</title>
</head>
<body>
<!--
0-20g -> 5
20-100 -> 10
100- -> 20
-->

<form action="porto.php" method="get">
 <input type="text" name="vikt"><br>
 <input type="submit" value="Vad kostar det?">
</form>
<!-- Finns ett automatisk fält
 $_GET['index'], i vår fall
 finns bara en plats,
 platsen med index 'vikt' -->
<?php
echo $_GET['vikt']."<br>";
$vikt = $_GET['vikt'];
$pris;
if ($vikt <= 20){
 $pris = 5;
}
else if ($vikt <= 100) {
 $pris = 10;
}
else if ($vikt > 100) {
 $pris = 20;
}
else{
 $pris = "Felaktig invärde";
}
echo "Ett brev som väger $vikt kostar $pris kronor.<br>";


for ($i=0; $i <10; $i++) {
 echo "$i \" \" ";
}

 $i;
 while ($i<10) {
   echo $i."\"\"";
   $i++;
 }

?>
</body>
</html>
