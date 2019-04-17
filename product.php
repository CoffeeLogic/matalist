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

      
      <div class="hdr__acts">
        <button class="btn__rd btn--fav-cnt" onclick="window.location.href='includes/logout.php'">
          <i class="btn__seg ion-android-favorite"></i>
        </button>
  </div>
  </header>
       <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>
<br>
    <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))
          {
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
            //////////////////////////////////////
            echo '<div class="gallery-container">';
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
                  <div style="background-image: url(img/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
          echo '</div>';
          ////////////////////////////////
          }//if
        else
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
