

<?php
/*
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
*/

session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: /index.php');
//this will redirect to index on exit
die;

?>
