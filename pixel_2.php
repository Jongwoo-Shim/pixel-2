<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Home Pixel2</title>
    <link type="text/css" rel="stylesheet" href="Resource/css/pixel2.css?v=1.1">    
</head>
<BODY>
    
<?php if (1){ ?>
    <nav>
    <div >
        <a href="pixel_2.php"> 
            <img class="logo-img" src="Resource/Img/pixel2logo.png" alt="Pixel 2 Logo" height="116" width="150">  
        </a>
        <ul >
            <li class="navbar-right" style="right: 28%;"><a>Logout</a></li>
            <li class="navbar-right" style="right: 22%;"><a>Archive</a></li>
            <li class="navbar-right" style="right: 16%;"><a>Boards</a></li>
            <li class="navbar-right" style="right: 10%;"><a>Personal</a></li>

        </ul>
    </div>
    </nav>       
<?php } else { ?>
    <nav>
    <div >
        <a href="pixel_2.php"> 
            <img class="logo-img" src="Resource/Img/pixel2logo.png" alt="Pixel 2 Logo" height="116" width="150">  
        </a>
        <ul >
            <li class="navbar-right" ><a href="login.php">Login</a></li>
            <li class="navbar-right" style="right: 4%;"><a href="register.php">Register</a></li>
        </ul>
    </div> 
    </nav>
<?php } ?>  
    
<div class="body_page">
    <div class="banner_img">
        <img src="Resource/Img/Welchcorgipembroke.JPG" alt="Banner Immage description to come" style="margin-top: 100px; margin-left: 6%;" height="500px" width="88%">
    </div> 
    <div class="features">
    <h1>Features</h1>
    <p> Featuring </p>
    </div>
  
</div>
</BODY>
</html>