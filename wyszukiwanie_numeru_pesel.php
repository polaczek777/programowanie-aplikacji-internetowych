<?php
$wzorzec='/[0-9]{11}/';
$tekst="0453289410";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono pesel ".$matches[0];
else
echo "nie znaleziono peselu ";
?>