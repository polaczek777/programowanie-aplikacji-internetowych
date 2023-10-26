<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inb5";
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];

$vehicle1=NULL;
$vehicle2=NULL;

if(isset($_POST['vehicle'])){
    $vehicle1=$_POST['vehicle'];
}
if(isset($_POST['vehicle2'])){
    $vehicle2=$_POST['vehicle2'];
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO MyGuests (firstname, lastname, email,vehicle,vehicle2)
VALUES('$name','$lastname','$email','$vehicle1','$vehicle2')";

if (mysqli_query($conn, $sql)) {
    echo "Dodano rekord";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>
