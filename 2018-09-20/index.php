<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Programering</title>
</head>
<body>

<?php
//$foo = 1;
//echo $foo;

//$bar = 2;
//echo $bar;
//$bar = $foo;
$bar = 1;
echo $bar;
$foo = & $bar;
echo $foo;
$bar = 2;
echo $foo;


?>

</body>
</html>
