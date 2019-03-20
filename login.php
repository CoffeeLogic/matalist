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
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <nav class="app--nav state--loaded">
    
    <!--Logo-->
    <a href="#" class="app--logo">MataList</a>
    
    <!--**********IDK I THINK THE SIDEBAR ENDED?***********-->
    
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
      

          <section class="section-default">
            <h1>Login</h1>
            <?php
            // Here we create a success message if the new user was created.
            ?>
            <form class="form-signup" action="includes/login.inc.php" method="post">
              <?php

              // We check username.
              if (!empty($_GET["uid"])) {
                echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
              }
              else {
                echo '<input type="text" name="uid" placeholder="Username">';
              }
              ?>
              <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>    
    <br>
              <center><a href="signup.php">Not a member? Create an Account</a></center>
            </form>
            </section>

      
    
  </main>
  
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js'></script>
  <script  src="js/index.js"></script>


</body>
</html>