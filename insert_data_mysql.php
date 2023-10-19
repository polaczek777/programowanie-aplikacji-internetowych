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
$sql="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('John','Doe','John@example,com');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Kamil','Konfitura','Kamil@example,com');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Alvares','Sention','Sention@example,com');";
if (mysqli_multi_query($conn,$sql)){
    echo "new record create successfully";
}else{
    echo "error: ". $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>