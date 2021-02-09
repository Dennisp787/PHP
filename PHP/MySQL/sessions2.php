<?php
  session_start();
  echo "your username is " .$_SESSION['username']. ".";

  print_r($_SESSION);
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP session</title>
    <a href="logout.php">Log out of session</a>
  </head>
  <body>
    <h1>PHP Session</h1>
  </body>
</html>
