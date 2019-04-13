<?php
  session_start();
#require_once('includes/dbh.inc.php');
?>
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





<!----------------reset button ----------------------------
    <div class="rslt__fltr__acts">
      <button class="btn__rds btn__prim btn-act--reset">
        <i class="btn__seg ion ion-ios-refresh-empty"></i><span class="btn__seg btn__seg--txt">reset search</span>
      </button>
    </div>
------------------------------------------------------------>
  </div>
</nav>












<main class="app--core">
  <h2 class="app--logo">About Matalist</h2>
  <header class="app--hdr">
    <section class="buttons">
        <div class="buttoncont">
          <a href="login.php" class="headerbtn headerbtn-1">Login</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
        </div>
      </section>

  <!--
    <div class="hdr__inr">
      <label for="search" class="hdr__srch">
        <input type="text" class="srch__txt" name="search" placeholder="Search" />
        <span class="srch__icn"><i class="ion-ios-search"></i></span>
      </label>
    </div>


  </header>
  
  <section class="rslt">
    <nav class="rslt__view">
      <p class="rslt__view__dtl">Showing <strong>0</strong> Results for ___</p>
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
  -->
    <div class="para">
      <p align="center">MataList is a buy and sell marketplace website specifically for CSUN students to buy or sell items to their fellow students. Since a secure login with your CSUN email is required, we assure you that Matalist is safe and more reliable trading site for students. There will be other features like club and organization activities posting and viewing to make it easier to access what events and fundraisers are happening on campus to increase campus activity. This is our senior design project and we hope you enjoy this!</p>
    </div>
    <div>
    <a href="gallery.php" class="matalist aboutbtn">Matalist Gallery</a>
  </div>


<!-- ====================LIST OF ITEMS ================ -->

<!-- THIS IS THE STYLING FOR THE GALLERY IMAGES, WILL CHANGE LATER ON IF WE HAVE TIME




    <ul class="rslt__feed">
      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">


          <div class="feed__itm__img" > --> <!-- INSERT IMAGE HERE FROM DB style="background-image: url('.... -->
<!--
           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">
        -->

          <!-- INSERT IMAGE HERE FROM DB-->
          <!--
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">

          
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">

          
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">

          
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item>
        <div class="feed__itm__inr">

          
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>
    -->


    <?php
        if(isset($_SESSION["uid"]))
        {
          $uid = $_SESSION["uidUsers"];
          echo "Logged in as '{$_SESSION['uid']}'";
        }
        else
        {
          echo "not logged in";
        }
    ?>


<!--------------------LOGUOT?---->
<a href="includes/logout.php">Logout</a>
<!-------------------LOGOUT?----->

      <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].'); height: 200px; width: 400px; border: 1px solid black;"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>
    </ul>
    <!--
    <footer class="feed__pgr">
      <button class="btn__rds pgr__itm pgr__str"><i class="btn__seg ion ion-ios-arrow-left"></i><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm pgr__prev"><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm state--selected"><span>1 - 9</span></button>
      <button class="btn__rds pgr__itm"><span>10 - 19</span></button>
      <button class="btn__rds pgr__itm"><span>20 - 29</span></button>
      <button class="btn__rds pgr__itm"><span>30 - 39</span></button>
      <button class="btn__rds pgr__itm"><span>40 - 49</span></button>
      <button class="btn__rds pgr__itm"><span>50 - 59</span></button>
      <button class="btn__rds pgr__itm"><span>60 - 69</span></button>
      <button class="btn__rds pgr__itm pgr__next"><i class="btn__seg ion ion-ios-arrow-right"></i></button>
      <button class="btn__rds pgr__itm pgr__end"><i class="btn__seg ion ion-ios-arrow-right"></i><i class="btn__seg ion ion-ios-arrow-right"></i></button>
    </footer>
  -->
    
  </section>
  
</main>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

  

<script  src="js/index.js"></script>




</body>

</html>