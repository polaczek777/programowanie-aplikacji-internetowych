<?php
$wzorzec='/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst="11.04.2023";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono datę".$matches[0];
else
echo "nie znaleziono daty";
//([0123]?\d) dzien
//[-\.\/] separator
//([01]?\d) miesiąc
//(\d{4}) rok
?>