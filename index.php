<?php include 'header.php'?>

<!DOCTYPE html>
<html>
<!-- =========================LOGGED IN PAGE ======================== -->

<head>
  <meta charset="UTF-8">
  <title>Matalist.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css'>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttoncss.css">
  <link rel="stylesheet" href="css/aboutus.css">	
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 75%;
    margin: auto;
  }
  </style>

  
</head>

<body>


<nav class="app--nav state--loaded">

  <!--Logo-->
  <a href="#" class="app--logo">MataList</a>

  <!--Side nav filters-->
  <div class="rslt__fltr">  

      <!--Links-->
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
          <span class="menu__fltr__lbl"><a href="faq.html" title="Signup">FAQ</span></a>
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
<!----------SIDEBAR END------------->

<main class="app--core">
  <h2 class="app--logo">About Matalist</h2>
  <header class="app--hdr">
    <section class="buttons">
        <div class="buttoncont">
          <a href="login.php" class="headerbtn headerbtn-1">Login</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
          <a href="faq.html" class="headerbtn headerbtn-1">FAQ</a>
        </div>
      </section>
	</header>
	      <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))
          {
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
          }//if
        else
          {
            echo "Not logged in";
          }//else
        ?>
      </div>
    <!--Logged in message & logout-->
	  


	
	<div class="col-sm-6 col-md-6 col-xs-12 image-container">
		
<br>			
<p class="bio">MataList is a buy and sell marketplace website specifically for CSUN students to buy or sell items to their fellow students. Since a secure login is required,   
we assure you that Matalist is safe and more reliable trading site for students. There will be other features like club and organization activities posting and viewing to 
make it easier to access what events and fundraisers are happening on campus to increase campus activity. Come and visit Matalist. SHOP, SELL, MEET NEW FRIENDS, HAVE FUN!!! 
</p><br>	    
</div>




	  
      <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >

      <div class="item active">
        <src="img/gallery/csun.jpg" alt="csun" width="460" height="345">
      </div>

      <div class="item">
        <src="img/gallery/capture (3).png" alt="matador" width="460" height="345">
      </div>
    
      <div class="item">
        <src="img/gallery/jose.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <src="img/gallery/garrett.jpg" alt="Flower" width="460" height="345">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
</div>
	      </main>	    
</body>
    


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script  src="js/index.js"></script>






</html>
