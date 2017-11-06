<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br>
  Password: <input type="text" name="fpassword">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    $password = htmlspecialchars($_REQUEST['fpassword']);
    if (empty($name) || empty($password)) {
    	echo "ERROR";
    } else {
        echo $name;
        echo $password;
    }
}
?>

</body>
</html>