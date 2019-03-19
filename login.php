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
  <link rel="stylesheet" href="./style.css">

  
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
          <span class="menu__fltr__lbl"><a href="index.html" title="Index">Index</span></a>
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
    <!--sale filter-->
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
          <span class="menu__fltr__lbl">Services</span>
          <span class="menu__fltr__cntr cntr-clr--2">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Home</span>
          <span class="menu__fltr__cntr cntr-clr--3">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Wanted</span>
          <span class="menu__fltr__cntr cntr-clr--3">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Other</span>
          <span class="menu__fltr__cntr cntr-clr--3">0</span>
        </li>
      </ul>
    </div>
    
    <!--sold by filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-person"></i><span class="btn__seg btn__seg--txt">Sold by</span>
      </button>
      
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl">Owner</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--2"></span>
          <span class="menu__fltr__lbl">Dealer</span>
        </li>
      </ul>
    </div>
    
    <!--price filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-card"></i><span class="btn__seg btn__seg--txt">price</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__sldr">
          <div js-price-slider></div>
        </li>
        <li class="menu__fltr fltr-type__sldr"></li>
      </ul>
    </div>
    
 

    <div class="rslt__fltr__acts">
      <button class="btn__rds btn__prim btn-act--reset">
        <i class="btn__seg ion ion-ios-refresh-empty"></i><span class="btn__seg btn__seg--txt">reset search</span>
      </button>
    </div>
    
  </div>
</nav>

<main class="app--core">
  <header class="app--hdr">
    <div class="hdr__inr">
      <label for="search" class="hdr__srch">
        <input type="text" class="srch__txt" name="search" placeholder="Search" />
        <span class="srch__icn"><i class="ion-ios-search"></i></span>
      </label>
      <div class="hdr__acts">
        <button class="btn__rd btn--fav-cnt" onclick="window.location.href='submit.html'" = 'www.yoursite.com'>
          <i class="btn__seg ion-android-favorite"></i>
        </button>
        <button class="btn__rd btn--usr-avtr" onclick="window.location.href='collab.html'"></button>
      </div>
    </div>
  </header>
  
  <section class="rslt">
    <nav class="rslt__view">
      <p class="rslt__view__dtl">Showing <strong>0</strong> Results for </p>
      <div class="rslt__view__acts">
        <button class="btn__fl state--active" js-view-grid><i class="btn__seg ion ion-grid"></i></button>
        <button class="btn__fl" js-view-rows><i class="btn__seg ion ion-navicon"></i></button>
        <button class="btn__fl" js-view-map><i class="btn__seg ion ion-ios-location"></i></button>
        
        <label class="ui-dd">
            <select name="result-sort" id="">
              <option value="relevant">Relevant</option>
              <option value="relevant">Recent</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
      </div>
    </nav>
      </section>
    

        <section class="section-default">
          <h1>Login</h1>
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
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
          <form class="form-signup" action="includes/login.inc.php" method="post">
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
        <button type="submit" name="login-submit">Login</button>    
	<br>
            <center><a href="signup.php">Not a member? Create an Account</a></center>
          </form>
           </section>

    
  
</main>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
