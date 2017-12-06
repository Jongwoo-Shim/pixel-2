<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Store";


$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error you suck " . mysqli_error($con));
$result1 = mysqli_query($con, "SELECT username FROM Customers WHERE username = '".$name."'");

if (!$result1)
{
  die(mysqli_error($con));
}

if(mysqli_num_rows($result1) > 0 )
{
  mysqli_query($con,"UPDATE Colours SET colour='$colour' WHERE slot='$slot'");
}
else
{
	mysqli_query($con,"INSERT INTO Colours (slot, colour)
	VALUES ('$slot', '$colour')");
}

$con = null;
break;
?>
