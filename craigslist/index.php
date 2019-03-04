<?php
  #$_SESSION['username'] = "Admin";
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

    <!--Under CSUN-->
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
<?php
if(isset($_SESSION['uid']))
{
  
?>


<?php
}
else
{

echo "notloggedin";
}
?> 
