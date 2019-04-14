<?php
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
          <section class="section-default">
            <h1>Login</h1>
            <?php
            // Here we create a success message if the new user was created.
            ?>
            <form class="form-signup" action="includes/login.inc.php" method="post">
              <?php

              // We check username.
              if (!empty($_GET["uid"])) {
                echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
              }
              else {
                echo '<input type="text" name="uid" placeholder="Username">';
              }
              ?>
              <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>    
    <br>
              <center><a href="signup.php">Not a member? Create an Account</a></center>
            </form>
            

      <div>
<!--Logged in message & logout-->
<?php
        if(isset($_SESSION["uid"]))
        {
          $uid = $_SESSION["uidUsers"];
          echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
        }
        else
        {
          echo "not logged in";
        }
    ?>
<!--Logged in & logout end-->
      </div>
      </section>
  </main>
  
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
  <script  src="js/index.js"></script>


</body>
</html>
