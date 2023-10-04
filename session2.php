<?php
session_start();
echo "welcome to page #2";

echo 'ulubiony kolor: '.$_SESSION['favcolor'];
echo 'ulubione zwierzę: '.$_SESSION['animal'].'<br>';
echo date('Y m d H:i:s',$_SESSION['time']).'<br>';

echo $_SESSION['bzdura'];
?>