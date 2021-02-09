<?php
include('includes/header.php');
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


?>

<h1>Logged out</h1>

<p class="lead">You've been logged out. See you next time!</p>

<?php
include('includes/footer.php');
?>
