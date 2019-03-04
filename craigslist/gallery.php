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

  <!--
  Couldnt Resist, looked too good not to try

  https://dribbble.com/shots/1847266-Craigslist-Redesign?list=searches&tag=craigslist&offset=1
-->


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
    
    <!--year filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-calendar"></i><span class="btn__seg btn__seg--txt">year</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__rang">
          <label class="ui-dd">
            <select name="min-range-year" id="">
              <option value="">min</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
          <span class="rang-brdg">to</span>
          <label class="ui-dd">
            <select name="max-range-year" id="">
              <option value="">max</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
        </li>
      </ul>
    </div>
  -->
    <!--paint filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-paintbucket"></i><span class="btn__seg btn__seg--txt">paint</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__clr">
          <span class="menu__fltr__clr fltr__clr--white"></span>
          <span class="menu__fltr__clr fltr__clr--black"></span>
          <span class="menu__fltr__clr fltr__clr--orange"></span>
          <span class="menu__fltr__clr fltr__clr--red"></span>
          <span class="menu__fltr__clr fltr__clr--teal"></span>
          <span class="menu__fltr__clr fltr__clr--grey"></span>
          <span class="menu__fltr__clr fltr__clr--yellow"></span>
        </li>
      </ul>
    </div>
  -->
    
    <!--odometer filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">odometer</span>
      </button>
      <ul class="ui-nav-menu-opts">     </ul>
    </div>
  -->
    
    <!--fuel filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">fuel</span>
      </button>
      <ul class="ui-nav-menu-opts">     </ul>
    </div>
  -->

    <!--transmission filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">transmission</span>
      </button>
      <ul class="ui-nav-menu-opts">    </ul>
    </div>
  -->

    <!--type filter-->
    <!--
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">type</span>
      </button>
      <ul class="ui-nav-menu-opts">     </ul>
    </div>
  -->

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
    

       <section class="gallery-links">
        <div class="wrapper">
             <center><h2>Upload</h2></center>
          <?php
          if (isset($_SESSION['username'])) {
            echo '<div class="gallery-upload">
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>
          <h2>Gallery</h2>

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
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>


        </div>
      </section>
    
  
</main>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
