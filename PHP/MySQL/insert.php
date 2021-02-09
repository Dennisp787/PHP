<?php

include("connection.php");
if( isset($_POST["add"])){
  //build a function that validates the data
  function validateFormData( $formData ){
  $formData = trim( stripslashes(htmlspecialchars($formData)));
  return $formData;
  }

  //set all variables to Empty
  $username = $email = $password = "";
   //check to see if inputs are empty
   //create variables with form data
   //wrap data with function

   if(!$_POST['username']){
    $usernameError = "Please enter your username <br>";
   }else{
    $username = validateFormData($_POST["username"]);
   }
   if(!$_POST['email']){
    $emailError = "Please enter yor email <br>";
   }else{
    $email = validateFormData($_POST["email"]);
   }
   if(!$_POST['password']){
    $passwordError = "Please enter yor password <br>";
   }else{
    $password = validateFormData($_POST["password"]);
   }
    $bio = validateFormData($_POST["bio"]);
    //check to see if variable has data
    if( $username && $email && $password){

      $query = "INSERT INTO users (id, username, password, email, signup_date, biography)
      VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, '$bio')";

      if( mysqli_query($conn, $query)){
        echo "new record in database";
      }else{
        echo "Error: ". $query ."<br>". mysqli_error($conn);
      }
    }
  }

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MySQL Insert</title>
  </head>
  <body>


    <p>* Required Field</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <small>* <?php echo $usernameError?></small>
      <input type="text" placeholder="Username" name="username"><br>
      <small>* <?php echo $emailError?></small>
      <input type="text" placeholder="Email" name="email"><br>
      <small>* <?php echo $passwordError?></small>
      <input type="password" placeholder="Password" name="password"><br>
      <input type="textarea" placeholder="Bio" name="bio"><br>
      <input type="submit" name="add" value="Add Entry">
    </form>
  </body>
</html>
