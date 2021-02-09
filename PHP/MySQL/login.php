<?php
  if(isset( $_POST['login'] ) ){
    //build a function to validate data
    function validateFormData( $formData ) {
      $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
      return $formData;
    }
    //create variables
    //wrap data in function
    $formUser = validateFormData( $_POST['username']);
    $formPass = validateFormData( $_POST['password']);

    //connect to Database
    include('connection.php');

    //create SQL query
    $query = "SELECT username, email, pass FROM users WHERE username ='$formUser' ";

    $result = mysqli_query( $conn, $query);

    //verify if result is returned
    if( mysqli_num_rows($result) > 0){
      //store basic user data in variables
      while( $row = mysqli_fetch_assoc( $result ) ){
        $user = $row['username'];
        $email = $row['email'];
        $hashedPass = password_hash($row['pass'], PASSWORD_DEFAULT);

      }

      //verify hashed password with the typed password
      if(password_verify( $formPass,$hashedPass ) ){

        //correct login details
        //start the session
        session_start();

        //store data in SESSION variables
        $_SESSION['loggedInUser'] = $user;
        $_SESSION['loggedInEmail'] = $email;

        header("Location: profile.php");


      }
      else{
        //hashed password didnt verify
        //error message
        $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again</div>";
      }

    }else{
      // there are no reults in database
      $loginError = "<div class='alert alert-danger'> No such user in database. Try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }

    //close mysql connection
    mysqli_close($conn);
  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Use this form to log into your account.</p>
      <?php
        echo $loginError;
       ?>
    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div class="form-group">
        <label class="sr-only" for="username">Username</label>
        <input class="form-control-sm" id="username" type="text" placeholder="Username" name="username">

        <label class="sr-only" for="password">Password</label>
        <input  class="form-control-sm" id="password" type="password" placeholder="Password" name="password">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>

    </form>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
