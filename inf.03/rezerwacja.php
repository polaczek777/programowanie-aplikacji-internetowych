<?php
$localhost="localhost";
$username="root";
$password="";
$db="bazainb2";

$conn=mysqli_connect($localhost,$username,$password,$db);
if(!$conn){
    die("Connection faild: ".mysqli_connect_error());
}

$data=$_POST['data'];
$ile=$_POST['ile'];
$telefon=$_POST['telefon'];

$sql="INSERT INTO rezerwacje(data_rez,liczba_osob,telefon) VALUES('$data','$ile','$telefon')";
if(mysqli_query($conn,$sql)){
    echo "Dodano rezerwację do bazy";
}else{
    echo "error: ".mysqli_error($conn);
}

mysqli_close($conn);
?>