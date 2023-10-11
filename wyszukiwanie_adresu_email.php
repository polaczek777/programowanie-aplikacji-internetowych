<?php
$wzorzec='/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst="SeatTopAudiGniot100@wp.pl";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono email ".$matches[0];
else
echo "nie znaleziono email ";
?>