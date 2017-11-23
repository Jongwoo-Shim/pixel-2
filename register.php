<!DOCTYPE html>
<html>
<head><
  <title>Registration Page </title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname"><br>
    Password: <input type="text" name="fpassword">
    <input type="submit">
  </form>
  <!-- Captcha -->
  <form action="?" method="POST">
    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
    <br/>
    <input type="submit" value="Submit">
  </form>

  <?php
  $count = 0
  $captcha = false
  else{
    echo"
    <script type=\"text/javascript\">
    document.getElementById().style.display = 'none'
    </script>
    "
    }
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {   
      while(1){
        if($count > 3){
          echo "
          <script type =\ "text/javascript\">
          document.getElementById("your form id").style.display="block";
          </script>
          "
        }
          // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        $pass = htmlspecialchars($_REQUEST['fpassword']);
        //adjusts the captcha value
        echo "
        <script src="recaptcha.js"></script>
        "
        if (empty($name) || empty($pass) || $captcha){
          $count++
          echo "Login Failure";
        }
        else{
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
                echo "Username Taken";
            }
            else{
              $sql = "INSERT INTO Customers (username, password)
              VALUES ('$name', '$pass')";
              // use exec() because no results are returned
              $conn->exec($sql);
              echo "New Account Created";
            }
          }
          catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
          }

          $conn = null;
          break;
        }
      }
      
  }
  ?>
</body>
</html>
