<?php
$servername="localhost";
$username="root";
$password="";
$db="inb5";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully";

$firstname=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$fav_language=$_POST["fav_langue"];

$sql="INSERT INTO MyGuests (firstname,lastname,email,fav_language)VALUES('$firstname','$lastname','$email','$fav_language')";
if(mysqli_query($conn,$sql)){
    echo "new record created successfully";
}else{
    echo "error: ".$sql."<br>".mysqli_error($conn);
}
?>