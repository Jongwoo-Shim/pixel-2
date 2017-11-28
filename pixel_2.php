<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Home Pixel2</title>
    <link type="text/css" rel="stylesheet" href="Resource/css/pixel2.css?v=1.1">
    <link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Coda Caption:800' rel='stylesheet'>
</head>
<BODY>
    
<?php if ($logged_id){ ?>
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
            <li class="navbar-right" ><a class="a-navBar" href="login.php">Login</a></li>
            <li class="navbar-right" style="right: 4%;"><a class="a-navBar" href="register.php">Register</a></li>
        </ul>
    </div> 
    </nav>
<?php } ?>  
    
<div class="body_page">
    <section class="banner-block">
        <h1 class="h1-banner"> Pixel by Pixel </h1>
        <p class="p-banner"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. </p>
        <img class="banner-img" src="Resource/Img/place-final.png" alt="Banner Immage description to come"  height="500px" width="88%">
    </section> 
    <section class="features">
    <h1 class="features-h1" style="margin-top: 0px;" > Features</h1>
    <p class="features-p"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
    <p class="features-p" style="left:42%"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
    <p class="features-p" style="left:75%"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco   </p>
    </section>
    <section class="creators">
    <h1 class="creators-h1"style="margin-top: 0px;" > Creators</h1>
    <p class="creators-p"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  </p>
    <p class="creators-p" style="top: 1350px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, t </p>
    <p class="creators-p" style="top: 1550px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod   </p>
    </section>
    
</div>
</BODY>
</html>