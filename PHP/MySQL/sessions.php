<?php
  session_start();
  $_SESSION['username'] = "dennisp";
  $_SESSION['email'] = "dennis@email.com";
   echo "session is active";
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP session</title>
  </head>
  <body>
    <h1>PHP Session</h1>
  </body>
</html>
