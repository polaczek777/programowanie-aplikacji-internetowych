<?php
$wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst="www.zsgsucha.pl";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono strony ".$matches[0];
else
echo "nie znaleziono strony ";
// \bhtpp adres może zaczynać sie od htptp
// s? może być w wersji https
// : zwykły znak :
// \/\/ ukośnik określa koniec regularnego
// ()|() kreska pionowa oznacza ze może wystąpić jedno z wyrażeń umieszczonych między nawasami
// \bwww adres może zaczynać sie od www
// \. po www występuje kropka
// \S* dowolna liczba zanków różnych od odstępu
?>