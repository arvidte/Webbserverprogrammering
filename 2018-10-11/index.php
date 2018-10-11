<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Formulärdata</title>
</head>
<body>
  <form action="index.php" method="post">
  <input type="text" name="tal1"><br>
  <input type="text" name="tal2"><br>

  <select name="val">
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="*">*</option>
    <option value="/">/</option>
 </select>
 <input type="submit" value="Beräkna">
</form>

<?php
$val = $_POST['val'];

$tal1 = $_POST['tal1'];
$tal2 = $_POST['tal2'];
$summa;


if ($val=="-"){
  $summa = $tal1 - $tal2;

}

else if ($val=="/"){
  $summa = $tal1 / $tal2;

}

else if ($val=="*"){
  $summa = $tal1 * $tal2;

}

else if ($val=="+"){
  $summa = $tal1 + $tal2;

}
echo $summa;

?>

</body>
</html>








echo "# Webbserverprogrammering" >> README.md
git init
git add -A
git commit -m "first commit"
git remote add origin https://github.com/arvidte/Webbserverprogrammering.git
git push -u origin master
