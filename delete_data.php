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

$database="INB5";
$sql="CREATE DATABASE $database";
if (mysqli_query($conn,$sql)){
    echo "database create successfully";
}else{
    echo "error crating database: ".mysqli_error($conn);
}
$sql="CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT
        PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT
            CURRENT_TIMESTAMP ON UPDATE
        CURRENT_TIMESTAMP
)";
if (mysqli_query($conn,$sql)){
    echo "table MyGuests create successfully";
}else{
    echo "error crating table: ".mysqli_error($conn);
}
$sql="SELECT id, firstname, lastname FROM MyGuests";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "<ul>";
    while($row=mysqli_fetch_row($result)){
        echo "<li>".$row[0]." ".$row[1]. " ".$row[2]."</li>";
    }
    echo "</ul>";
}else{
    echo "0 results";
}
$sql="DELETE FROM MyGuests WHERE id=3";
if(mysqli_query($conn,$sql)){
    echo "Record deleted successfully";
}else{
    echo "Error deleting record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>