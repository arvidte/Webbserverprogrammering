<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Array</title>
</head>
<body>

<?php
// 8.2 sid 90
// stäng, sträng , flyttal,  heltal
// php skapar automatiskt index
$a = array("fo","bar",4.4,5);
//var_dump($a); // Datatypen
//echo "<br><br>";
//print_r($a);
$a[] = "nytt värde"; // index väljs av php
//echo "<br><br>";
//var_dump($a);
// => associerar (kopplar samman) nyckel med värde
$b = array("Sverige"=>"Stockholm", "Norge"=> "=Oslo");
//echo "<br><br>";
//var_dump($b);
$b[]="Köpenhamn";
//echo "<br><br>";
//var_dump($b);
$c=array("3"=>"Hej","4"=>"på");
//echo "<br><br>";
//var_dump($c);
$c[] = "dig"; // $c tilldelas ett nytt värde
//echo "<br><br>";
//var_dump($c);
//echo "<br><br>";
//echo $c[5];
//echo "<br><br>";
//echo $b["Sverige"];
//echo $b["sverige"]; //Platsen är tom, på grund av liten bokstav
$d = array("Ole", "Dole", "Doff");
$tal = 1;
echo $d[$tal]."<br>";


?>

</body>
</html>
