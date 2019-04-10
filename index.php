<?php
  session_start();

  if(isset($_SESSION["uid"]))
  {
    $uid = $_SESSION["uidUsers"];
    echo "Logged in as '{$_SESSION['uid']}'";
  }
  else
  {
    echo "not logged in";
  }
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
    <link rel="stylesheet" href="css/buttoncss.css"><!--********-->

  
</head>

<body>





    <?php
      echo "Logged in as '{$_SESSION['uid']}'";
    ?>


<!--------------------LOGUOT?---->
<a href="includes/logout.php">Logout</a>
<!-------------------LOGOUT?----->





<main class="app--core">
  <h2 class="app--logo">Buy - CSUN</h2>
  <header class="app--hdr">
    <section class="buttons">
        <div class="buttoncont">
          <a href="login.php" class="headerbtn headerbtn-1">Not You?</a>
          <a href="collab.html" class="headerbtn headerbtn-1">Collab</a>
        </div>
      </section>

  
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

<!-- ====================LIST OF ITEMS ================ -->
    <ul class="rslt__feed">
      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">


          <div class="feed__itm__img" > <!-- INSERT IMAGE HERE FROM DB style="background-image: url('.... -->

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">

          <!-- INSERT IMAGE HERE FROM DB-->
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">

          <!-- INSERT IMAGE HERE FROM DB-->
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">

          <!-- INSERT IMAGE HERE FROM DB-->
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">

          <!-- INSERT IMAGE HERE FROM DB-->
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">

          <!-- INSERT IMAGE HERE FROM DB-->
          <div class="feed__itm__img">

           <span class="feed__itm__prc">insert price here</span>
         </div>

         <h5 class="feed__itm__ttl">Case 1</h5>
          <p class="feed__itm__lbl lbl--1">Category<span>, tags</span></p>
        </div>
      </li>

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