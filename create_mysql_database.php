<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully";

$database="INB5";
$sql="CREATE DATABASE $database";
if (mysqli_query($conn,$sql)){
    echo "database create successfully";
}else{
    echo "error crating database: ".mysqli_error($conn);
}
mysqli_close($conn);
?>