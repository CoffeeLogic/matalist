<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Matalist Product</title>
  
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
<class="app--core">
  <h2 class="app--logo">Product - CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">
      <section class="buttons">
        <div class="buttoncont">
          <a href="includes/logout.php" class="headerbtn headerbtn-1">Log out</a>
          <a href="gallery.php" class="headerbtn headerbtn-1">Return to Gallery</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
        </div>
      </section>
    </div>
  </header>
       <section class="gallery-links">
        <div class="wrapper">
          <h2>Product</h2>
         
      
          
    <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))//IF LOGGED IN DISPLAY*************
          {
            $itemselected = $_GET["item"];
            $uid = $_SESSION["uidUsers"];
            echo "Logged in as '{$_SESSION['uid']}' <br> <a href=includes/logout.php>Logout</a>";
            //////////////////////////////////////
            echo '<div class="gallery-container">';
            include_once 'includes/dbh.inc.php';
            $sql = "SELECT * FROM gallery WHERE idGallery = '$itemselected'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              $row = mysqli_fetch_assoc($result);

                echo '<a href="gallery.php">
                  
                  <div style="background-image: url(img/'.$row["imgFullNameGallery"].'); height: 500px; width: 1000px; border: 2px solid black">
                  </div>
                  <p class="lead">
                  <h1>'.$row["titleGallery"].'</h1>
                  </p>
                  <p>'.$row["descGallery"].'</p>
                  <p>'.$row["users_email"].'</p>
                  <p>'.$row["idGallery"].'</p>
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

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
<script  src="js/index.js"></script>


</body>
</html>
