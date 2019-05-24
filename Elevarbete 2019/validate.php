<?php
// Funktion för att validera input
// <, >, /, \ och mellanslag o tab (vita tecken) är förbjudna
// Kollar om det kommer något alls, att längden är mellan 0 och 15 tecken
function test($in)
{
if(isset($in) &&  ( (strlen(strip_tags($in)) > 3) && ( strlen(strip_tags($in)) <= 15) ))
{
    // Kollar om det finns HTML-taggar
    if ( strlen($in) != strlen(strip_tags($in)) ) {
         return "HTML taggar hittades";
    }
    // Matchar mot ett regulgärt uttryck
    if (preg_match("/[\s \\ \/]/",$in)) {
        // Om det matchar, hittas
        return "Förbjudna tecken hitades";
    }
}
else {
      return "Antal tecken ".strlen($in). " vilket inte är tillåtet";
}
return "ok";
}
?>
