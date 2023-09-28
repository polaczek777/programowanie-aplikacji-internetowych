<?php
$myFile = fopen("newfile.txt","w")
or die("unable to open file");
$tekst="john już tu nie mieszka";
fwrite($myFile,$tekst);
fclose($myFile);
?>