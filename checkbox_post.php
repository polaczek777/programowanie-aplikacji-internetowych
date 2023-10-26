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

$sql="ALTER TABLE MyGuests ADD vehicle2 VARCHAR(30) NOT NULL";
if (mysqli_query($conn,$sql)){
    echo "table MyGuests add successfully";
}else{
    echo "error add table: ".mysqli_error($conn)."<br>";
}

$sql="ALTER TABLE MyGuests ADD vehicle2 VARCHAR(30) NOT NULL";
if (mysqli_query($conn,$sql)){
    echo "table MyGuests add successfully";
}else{
    echo "error add table: ".mysqli_error($conn)."<br>";
}

$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$vehicle1=$_POST["vehicle1"];
$vehicle2=$_POST["vehicle2"];

$sql="INSERT INTO MyGuests(firstname,lastname,email,vehicle,vehicle2)
VALUES('$name', '$lastname', '$email','$vehicle1','$vehicle2')";
echo $sql;
if(mysqli_query($conn,$sql)){
    echo "Dodano rekord";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn)."<br>";
}

mysqli_close($conn);
?>