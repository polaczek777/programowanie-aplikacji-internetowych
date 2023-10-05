<?php
$wzorzec='/być/';
$tekst="być albo nie być";
if(preg_match($wzorzec,$tekst))
echo "znalezniono wzorzec";
else
echo "nie znaleziono wzorzec";
?>