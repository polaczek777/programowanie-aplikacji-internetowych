<?php
$wzorzec='/\S*\.gif/i';
$text="w pliku obrazek.gif jest ikona";
if(preg_match($wzorzec, $text))
    echo "znaleziono obrazek";
else
    echo "nie znaleziono obrazku";
?>