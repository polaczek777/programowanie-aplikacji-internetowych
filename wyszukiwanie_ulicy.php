<?php
$wzorzec='/((ul\.)|(os\.)) [A-z]+ [0-9]+/';
$tekst="ul. polna 53";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono adres ".$matches[0];
else
echo "nie znaleziono adresu ";
?>