<?php include 'header.php'?>

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttoncss.css">
  
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
          <span class="menu__fltr__lbl"><a href="index.php" title="Index">Index</a></span>
        </li>
         <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="login.php" title="Login">Login</a></span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="signup.php" title="Signup">Signup</a></span>
        </li>
         <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl"><a href="gallery.php" title="Gallery">Gallery</a></span>
        </li>
      </ul>
    </div>



    <!----------------------Tag checkboxes------------------->
    <div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
      <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
        <i class="btn__seg ion ion-pricetag"></i><span class="btn__seg btn__seg--txt">for sale</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
      </button>

      <ul class="ui-nav-menu-opts">
      <form action='gallery.php' method='GET'>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="check_list[]" value="1" />
          <span class="menu__fltr__lbl">Books</span>
          <span class="menu__fltr__cntr cntr-clr--1">0</span>
        </li>        
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="check_list[]" value="2" />
          <span class="menu__fltr__lbl">Tutoring</span>
          <span class="menu__fltr__cntr cntr-clr--2">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="check_list[]" value="3" />
          <span class="menu__fltr__lbl">Dorm goods</span>
          <span class="menu__fltr__cntr cntr-clr--3">0</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="check_list[]" value="4" />
          <span class="menu__fltr__lbl">Food</span>
          <span class="menu__fltr__cntr cntr-clr--4">0</span>
        </li>
        <li>
          <input type="submit" value="Submit">
        </li>
        <li>
          <button href="gallery.php">
        </li>
      </ul>
      

    </div>
    <!----------------------Tag checkboxes------------------->
  </div><!--side nav filters div-->
</nav>


<!-------------MAIN GALLERY------------>
<main class="app--core">
  <h2 class="app--logo">Gallery - CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">
      <section class="buttons">
        <div class="buttoncont">
          <a href="login.php" class="headerbtn headerbtn-1">Login</a>
          <a href="submit.php" class="headerbtn headerbtn-1">Post</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
        </div>
      </section>

      
      <div class="hdr__acts">
        <button class="btn__rd btn--fav-cnt" onclick="window.location.href='includes/logout.php'">
          <i class="btn__seg ion-android-favorite"></i>
        </button>
       <button class="btn__rd btn--usr-avtr" onclick="window.location.href='submit.php'"></button>
      </div>

    </div>
  </header>


       <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>
<br>
    <!--Logged in message & logout-->
    <div align="center">   
      <?php
      
      
$tag_list = "";
$whateverthingy = ", ";

      






        if(isset($_SESSION["uid"]))//IF LOGGED IN DISPLAY*************
          {
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
            echo '<div class="gallery-container">';
            include_once 'includes/dbh.inc.php';
            //$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";



            if(!empty($_GET['check_list'])) {
              foreach($_GET['check_list'] as $check) {
                      if($tag_list == ""){
                        $tag_list .= "\'";
                        $tag_list .= $check;
                        $tag_list .= "\'";
                      }else{
                        $tag_list .= $whateverthingy;
                        $tag_list .= "\'";
                        $tag_list .= $check;
                        $tag_list .= "\'";
                      }
              }//loop
              echo "$tag_list <br>";
            $sql = "SELECT * FROM gallery WHERE tag IN $tag_list ORDER BY orderGallery DESC;";
          }else{
            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
          }//else






            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

               while ($row = mysqli_fetch_assoc($result)) {
                 //if in_array($row["tag"], ($GET_['check_list'])){
                  echo '<a href="product.php?item='.$row["idGallery"].'">
                    <div style="background-image: url(img/'.$row["imgFullNameGallery"].');"></div>
                    <h3>'.$row["titleGallery"].'</h3>
                    
                  </a>';
                 //}//if
              }//while
            }//else
          echo '</div>';
          }//if
        else//ELSE DON'T SEE GALLERY**************
          {
            echo "Please log in to view gallery.";
          }//else
        ?>
     
      </div>
    <!--Logged in message & logout-->


        </div>
      </section>
    
</main><!--MAIN-->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
