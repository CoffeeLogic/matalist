<?php
  include 'header.php';
  $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Craigslist Dashboard</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css'>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttoncss.css">
  <link rel="stylesheet" href="css/aboutus.css">

  
</head>

<body>

<nav class="app--nav state--loaded">

  <!--Logo-->
  <a href="#" class="app--logo">MataList</a>

  <!--Side nav filters-->
  <div class="rslt__fltr">  

      <!--area filter-->
     <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-location"></i><span class="btn__seg btn__seg--txt">CSUN</span>
      </button>

      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="index.php" title="Index">Index</span></a>
        </li>
         <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="login.php" title="Login">Login</span></a>
        </li>
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="signup.php" title="Signup">Signup</span></a>
        </li>
         <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="gallery.php" title="Gallery">Gallery</span></a>
        </li>
         <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="faq.html" title="Gallery">FAQ</span></a>
        </li>
      </ul>
    </div>



    <!----------------------Tag checkboxes------------------->
      
    <div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
      <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
        <i class="btn__seg ion ion-pricetag"></i><span class="btn__seg btn__seg--txt">for sale</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
      </button>

      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="cars & trucks" />
          <span class="menu__fltr__lbl">Books</span>
          <span class="menu__fltr__cntr cntr-clr--1">0</span>
        </li>        
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="auto parts" />
          <span class="menu__fltr__lbl">Tutoring</span>
          <span class="menu__fltr__cntr cntr-clr--2">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Dorm goods</span>
          <span class="menu__fltr__cntr cntr-clr--3">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Food</span>
          <span class="menu__fltr__cntr cntr-clr--4">0</span>
        </li>
      </ul>
    </div>
    <!----------------------Tag checkboxes------------------->
</div>
</nav>

<main class="app--core">
  <h2 class="app--logo">CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">


          <section class="section-default">
            <p>
            <br>
            <h1>Login</h1>
            <?php

#sign up successfull redirect
  if ($_GET["signup"] == "success") {
    echo '<p class="signupsuccess">Signup successful!</p>';
  }


            // Invalid field inputs
            if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
             
            }

            }
          // Here we create a success message if the user logins and if username is invalid.
          else if (isset($_GET["login"])) {
            if ($_GET["login"] == "success") {
              echo '<p class="signupsuccess">Login successful!</p>';
            

            }
            else {
              echo '<p class="signuperror">Invalid Username </p>';
              
            }

          }
          // Invalid Password
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "wrongpwd") {
               echo '<p class="signuperror">Invalid Password </p>';
            }
          }

            ?>
            <form class="form-signup" action="includes/login.inc.php" method="post">
              <!--<input type="email" name="mail" placeholder="Email">  -->
              <?php
                // We check mail.
                if (!empty($_GET["mail"])) {
                  echo '<input type="email" name="mail" placeholder="Email" value="'.$_GET["mail"].'">';
                  //echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
                }
                else {
                  echo '<input type="email" name="mail" placeholder="Email">';
                  //echo '<input type="text" name="uid" placeholder="Username">';
                }
              ?>
              <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>    
    <br>
              <center><a href="signup.php">Not a member? Create an Account</a></center>
            </form>
            </section>

    <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))
          {
            $uid = $_SESSION["uidUsers"];
            echo "<br> Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
          }//if
        else
          {
            echo "<br> Not logged in";
          }//else
        ?>
      </div>
    <!--Logged in message & logout-->
      <br>
  </main>
  
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
  <script  src="js/index.js"></script>


</body>
</html>
