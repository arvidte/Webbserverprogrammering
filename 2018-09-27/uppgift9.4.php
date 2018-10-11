<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Programering</title>
</head>
<body>
  <form action="uppgift9.4.php" method="get">
   <input type="text" name="tal"><br>
    <input type="submit" value="OK">
  </form>
<?php
$tal = $_GET['tal'];
tecken($tal);

?>

</body>
</html>


<?php

function tecken ($tal)
{
 if ($tal >= 0)
  {
    echo "+";
  }

 else
  {
    echo "-";
  }

}



 ?>
