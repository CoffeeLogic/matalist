<?php
  include 'header.php';
  $_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Matalist - Signup</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css'>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab'>
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
    <!----------------------Tag checkboxes-------------------->
</div>
</nav>
    
<main class="app--core">
  <h2 class="app--logo">CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">


        <section class="section-default">
          <h1><br>Signup Now</h1>
          
          <?php
          
          ?>
         
          <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "notCsun") {
              echo '<p class="signuperror">Must use CSUN email!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "emailTaken") {
              echo '<p class="signuperror">Email is already taken!</p>';
            }
            else if ($_GET["error"] == "capchaError") {
              echo '<p class="signuperror">Please fill out captcha!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
            else{
              echo '<p class="signuperror">Signup is not successful!</p>';
            }
          }
          ?>

          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <?php
            // Here we check if the user already tried submitting data.

            // We check username.
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="Username">';
            }

            // We check e-mail.
            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <div class="g-recaptcha" data-sitekey="6LeUYaAUAAAAAMHBRgXaugN7WkfgN0jl77UIFixM"></div>
            <button type="submit" name="signup-submit">Signup</button>
            <br>
            <center><a class="pad-all" href="login.php">Already a member? Log In</a></center>
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
      <br>
    <!--Logged in message & logout-->


  </div>
</header>

</main>
<!-- CAPTCHA Script -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
