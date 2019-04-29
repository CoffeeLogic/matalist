<?php 
include 'header.php';
$_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Post your item/service</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" media="all" href="css/submitcss.css">

    <link rel="stylesheet" href="css/buttoncss.css">
    <link rel="stylesheet" href="css/aboutus.css">
  
  <style>

.app--logo {
  display: block;
  padding: 18px 0;
  font-family: "Roboto Slab", Times New Roman;
  font-size: 28px;
  line-height: 36px;
  text-align: center;
  color: #000;
  border-bottom: 1px solid #e5e5e5;
  text-decoration: none;
}
  </style>
        
   <h2 class="app--logo">Post - CSUN</h2>
  <header class="app--hdr">
    <div class="hdr__inr">
      <section class="buttons">
        <div class="buttoncont">
          <a href="index.php" class="headerbtn headerbtn-1">Back to Matalist</a>
          <a href="aboutus.html" class="headerbtn headerbtn-1">About Us</a>
          <a href="faq.html" class="headerbtn headerbtn-1">FAQ</a>

        </div>
      </section>

    </div>
  </header>
</head>

<body>

  <h1>Post your item/service</h1>


    <!--Logged in message & logout-->
    <div align="center">   
      <?php
        if(isset($_SESSION["uid"]))
          {
            
            if (isset($_SESSION['username'])) {
              echo '<div class="gallery-upload">

                  <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                    
                    <input type="text" name="filetitle" maxlength="35" placeholder="Post title">
                    <input type="text" name="filedesc" maxlength="200" placeholder="Description">
                    <textarea name="details" class="descriptionbox" placeholder="Details"></textarea>
                    <br>

                  </div>


              <div class="tagbutton">
                <label for="books">
                  <input type="radio" name="tag" value="1" id="books"> Books
                </label>
                <label for="tutoring">
                 <input type="radio" name="tag" value="2" id="tutoring"> Tutoring
                </label>
                <label for="dorm">
                  <input type="radio" name="tag" value="3" id="dorm"> Dorm Goods
                </label>
                <label for="food">
                  <input type="radio" name="tag" value="4" id="food"> Food
                </label>
                <label for="other">
                  <input type="radio" name="tag" value="0" id="other"> Other
                </label>
              </div>

              <div class="gallery-upload">

              <section class="buttons">
                <div class="buttoncont">


                  <input type="file" name="file">
                  <br>
                  <button type="submit" name="submit" class="headerbtn headerbtn-1">UPLOAD</button>
                  </form>
                </div>
              </section>
              </div>';
            }//if
            
            $uid = $_SESSION["uidUsers"];
            echo "<br><br>Logged in as '{$_SESSION['uid']}' ";
            $email = $_SESSION["email"];
            echo "<br><br>Email is: '{$_SESSION['email']}' <br> <a href=includes/logout.php>Logout</a><br>";
          }//if
        else
          {
            echo "Not logged in. Please Login to make a post.";
          }//else
        ?>
      </div>
    <!--Logged in message & logout-->

    

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="js/aboutus.js"></script>

</body>

</html>
