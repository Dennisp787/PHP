<?php
session_start();

include('includes/functions.php');

if( isset($_POST['login']) ){
  $formEmail = validateFormData($_POST['email']);
  $formPass = validateFormData($_POST['password']);

  //connect to DB
  include('includes/connection.php');

  //create query
  $query = "SELECT name, password FROM users WHERE email ='$formEmail'";

  //store result
  $result = mysqli_query($conn, $query);

  //verify if result has been confirmed
  if(mysqli_num_rows($result) > 0){
    //store user data into variables
    while( $row = mysqli_fetch_assoc($result)){
    $name = $row['name'];
    $hashedPass = $row['password'];
    }
    //verify password
    if(password_verify( $formPass, $hashedPass) ){
      //correct login details:
      //store data in SESSION variables
      $_SESSION['loggedInUser'] = $name;
      header('Location: clients.php');
    }else{
      //error
      $loginError = "<div class='alert alert-danger'>Wrong userame / password combination. Please try again.</div>";
    }
  }else{
    $loginError = "<div class='alert alert-danger'>No such user in database. Please try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
  }

}
//close myswl connection
mysqli_close($conn);

include('includes/header.php');
// $password = password_hash("kareem", PASSWORD_DEFAULT);

?>

<h1>Client Address Book</h1>
<p class="lead">Log in to your account.</p>
<?php
echo $loginError;
 ?>
<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div class="form-group">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="login-email" placeholder="email" name="email" value="<?php echo $formEmail; ?>">
    </div>
    <div class="form-group">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include('includes/footer.php');
?>
