

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

<!---------------------------SIDEBAR START---------------------->
<nav class="app--nav state--loaded">
  <a href="#" class="app--logo">MataList</a>
  
<!---------NAV MENU-------->
<div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
  <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
    <i class="btn__seg ion ion-ios-location"></i><span class="btn__seg btn__seg--txt">CSUN</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow "></i>
  </button>

  <ul class="ui-nav-menu-opts">
    <li class="menu__fltr fltr-type__row">
      <span class="menu__fltr__lgnd lgnd-clr--3"></span>
      <span class="menu__fltr__lbl">
        <a href="aboutus.html" title="About Us">About Us</a>
      </span>
    </li>

    <li class="menu__fltr fltr-type__row">
      <span class="menu__fltr__lgnd lgnd-clr--3"></span>
      <span class="menu__fltr__lbl">
        <a href="login.php" title="Login">Login</a>
      </span>
    </li>
    <li class="menu__fltr fltr-type__row">
      <span class="menu__fltr__lgnd lgnd-clr--3"></span>
      <span class="menu__fltr__lbl">
        <a href="signup.php" title="Sign Up">Sign Up</a>
      </span>
    </li>
    <li class="menu__fltr fltr-type__row">
      <span class="menu__fltr__lgnd lgnd-clr--3"></span>
      <span class="menu__fltr__lbl">
        <a href="profile.html" title="My Profile">My Profile</a>
      </span>
    </li>
    <li class="menu__fltr fltr-type__row">
      <span class="menu__fltr__lgnd lgnd-clr--3"></span>
      <span class="menu__fltr__lbl">
        <a href="gallery.html" title="Gallery">Gallery</a>
      </span>
    </li>
  </ul>
</div>
<!---------NAV MENU END----->


<!--------RADIO BUTTONS------->
<div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
  <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
    <i class="btn__seg ion ion-pricetag"></i><span class="btn__seg btn__seg--txt">Looking for...</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
  </button>

  <ul class="ui-nav-menu-opts">
    <li class="menu__fltr fltr-type__row">
      <input type="radio" name="sale" value="books" />
      <span class="menu__fltr__lbl">Books</span>
      <span class="menu__fltr__cntr cntr-clr--1">0</span>
    </li>        
    <li class="menu__fltr fltr-type__row">
      <input type="radio" name="sale" value="tutoring" />
      <span class="menu__fltr__lbl">Tutoring</span>
      <span class="menu__fltr__cntr cntr-clr--2">0</span>
    </li>
    <li class="menu__fltr fltr-type__row">
      <input type="radio" name="sale" value="dormGoods" />
      <span class="menu__fltr__lbl">Dorm goods/span>
      <span class="menu__fltr__cntr cntr-clr--3">0</span>
    </li>
    <li class="menu__fltr fltr-type__row">
      <input type="radio" name="sale" value="food" />
      <span class="menu__fltr__lbl">Food</span>
      <span class="menu__fltr__cntr cntr-clr--4">0</span>
    </li>
  </ul>
</div>

<div class="rslt__fltr__acts">
  <button class="btn__rds btn__prim btn-act--reset">
    <i class="btn__seg ion ion-ios-refresh-empty"></i><span class="btn__seg btn__seg--txt">reset search</span>
  </button>
</div>
<!---------------------------SIDEBAR END------------------------->
  
  

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


  </section>
</nav>   
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
