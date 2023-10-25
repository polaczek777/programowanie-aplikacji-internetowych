<?php
$db=mysqli_connect("localhost","root","","inb5");
if(!$db){
die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully"."<br>";

$sql="INSERT INTO MyGuests(firstname,lastname,email)
VALUES(\"". $_POST["name"] . "\", \"" . $_POST["lastname"] . "\", \"". $_POST["email"] . "\")";
echo $sql;
if(mysqli_query($db,$sql)){
    echo "Dodano rekord";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($db);
}
mysqli_close($db);
?>