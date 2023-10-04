<?php
session_start();
echo "welcome to page #3".'<br>';

echo 'ulubiony kolor: '.$_SESSION['favcolor'];
echo ' ulubione zwierzę: '.$_SESSION['animal'].'<br>';
echo date('Y m d H:i:s',$_SESSION['time']).'<br>';
unset($_SESSION['favcolor']);
echo 'ulubiony kolor: '.$_SESSION['favcolor'];
echo $_SESSION['bzdura'];
?>