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
    $pass = htmlspecialchars($_REQUEST['fpassword']);
    
    if (empty($name) || empty($pass))
    {
    	echo "ERROR";
    } 
    else 
    {
      // Add to the SQL Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "Store";

      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO Customers (username, password)
          VALUES ('$name', '$pass')";
          // use exec() because no results are returned
          $conn->exec($sql);
          echo "New record created successfully";
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;    
          }
      }
?>

</body>
</html>