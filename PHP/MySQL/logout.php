<?php

 //check if cookies have been set

 if( isset( $_COOKIE[ session_name() ]) ){
   //empty the cookie
   //set saved cookies to ''
   setcookie(session_name(), '', time()-86400, '/' ); //equals 1 day

 }
  //clear all session variables
  session_unset();
  //destroy the session
  session_destroy();


  echo "You've been logged out";



  // print_r($_SESSION);

  echo "<p><a href='login.php'>Login</a></p> "
 ?>
