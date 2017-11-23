<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br>
  Password: <input type="text" name="fpassword">
  <input type="submit">
</form>
<button type="button" onclick="register.php">Register</button>
<!-- Captcha -->
<form action="?" method="POST">
  <div class="g-recaptcha" data-sitekey="your_site_key"></div>
  <br/>
  <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // collect value of input field
    $captcha = false
    while(1){
    $name = htmlspecialchars($_REQUEST['fname']);
    $pass = htmlspecialchars($_REQUEST['fpassword']);
    echo "
    <script src="recaptcha.js"></script>
    "
    if (empty($name) || empty($pass) || $captcha){
      echo "Login Failed";
    }
    else{
      // NEED TO ADD CODE FOR LOGIN CHECK
      // Add to the SQL Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "Store";

      try{
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $result1 = mysql_query("SELECT username, password FROM Users WHERE username = '".$name."' AND  password = '".$pass."'");

          if(mysql_num_rows($result1) > 0 ){
              // LOGIN WORKS
            break;
          }
          else{
              echo 'The username or password is incorrect!';
          }
      }
      catch(PDOException $e){
          echo $sql . "<br>" . $e->getMessage();
      }

      $conn = null;
    }
  }
    
}
?>

</body>
</html>
