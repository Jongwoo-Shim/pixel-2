<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Store";


$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error you suck " . mysqli_error($con));

mysqli_query($con,"INSERT INTO Colours (slot, colour)
VALUES ('$slot', '$colour')");

$conn = null;
break;
?>
