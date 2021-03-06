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

<!-------------MAIN GALLERY------------>

  <h2 class="app--logo">Product - CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">
      <section class="buttons">
        <div class="buttoncont">
          <a href="includes/logout.php" class="headerbtn headerbtn-1">Logout</a>
          <a href="submit.php" class="headerbtn headerbtn-1">Post</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
          <a href="gallery.php" class="headerbtn headerbtn-1">Return to Gallery</a>
          
        </div>
      </section>
    </div>
  </header>
       <section class="gallery-links">
        <div class="wrapper">
        
<br>
    <!--Logged in message & logout-->
       <div align="center">  
 
      <?php
        if(isset($_SESSION["uid"]))//IF LOGGED IN DISPLAY*************
          {
            $itemselected = $_GET["item"];
            $int_itemSelected = intval($itemselected);
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}'";
            //////////////////////////////////////
            echo '<div>';
            include_once 'includes/spook/dbh.inc.php';   
            $sql = "SELECT * FROM gallery INNER JOIN users ON gallery.users_email = users.email WHERE idGallery = '$int_itemSelected'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              $row = mysqli_fetch_assoc($result);
               
               
              echo '<a style="text-decoration:none;">
                  <div class="col-sm-6 col-md-6 col-xs-12 image-container">
                  <div style=" background-image: url(img/'.$row["imgFullNameGallery"].'); height: 400px; width: 800px; background-repeat:no-repeat;"></div>
               
                  <br>
                  <p><font size="10" face="arial" color="black">'.$row["titleGallery"].'</font><p>
                  <br>
                  <p><font size="6" face="arial" color="black">'.$row["descGallery"].'</font><p>
                  <br>
                  <p><font size="4" face="arial" color="blue">User:'.$row["uidUsers"].'</font></p>
                  <p><font size="4" face="arial" color="green">Contact:'.$row["users_email"].'</font></p>
                  <p><font size="4" face="arial" color="red">ItemID:'.$itemselected.'</font></p>
                  <p><font size="4" face="arial" color="purple">Sanitized:'.$int_itemSelected.'</font></p>
                  <br>
                  <p><font size="6" face="arial" color="black">Details: '.$row["details"].'</font><p>
                  <br>
                 </div>
                </a>';   
              
              }
            
          echo '</div>';
          ////////////////////////////////
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
    
<!--MAIN-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
