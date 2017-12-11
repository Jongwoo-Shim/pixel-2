<?php

header("Content-Type: application/json");
// build a PHP variable from JSON sent using GET method
$arr = json_decode(stripslashes($_GET["colours.json"]));
// encode the PHP variable to JSON and send it back on client-side
// echo json_encode($v);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Store";


$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error you suck " . mysqli_error($con));

// for (var prop in obj) {
//     alert(prop + " is " + obj[prop]);
// }

for (var $slot in $arr)
{
    $colour = $arr[$slot];
    $result1 = mysqli_query($con, "SELECT slot FROM Customers WHERE slot = '".$slot."'");

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
}

mysqli_query($con,"SELECT slot FROM Customers FOR JSON AUTO");

$con = null;
// break;
?>
