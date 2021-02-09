<?php
session_start();

if(!$_SESSION['loggedInUser']){
  header('Location: index.php');
}

//connect to db
include('includes/connection.php');
//include functions
include('includes/functions.php');

//if add button was submitted
if( isset($_POST['add']) ){
  //set all variables to '' by default
  $clientname = $clientEmail = $clientPhone = $clientAddress = $clientCompany = $clientNotes = '';
  //check if inputs are Empty
  //create variables with form data
  //wrap data with our function
  if(!$_POST['clientName']){
    $nameError = 'Please enter a name <br>.';
  }else{
    $clientName = validateFormData( $_POST['clientName']);
  }
  if(!$_POST['clientEmail']){
    $emailError = 'Please enter a Email <br>.';
  }else{
    $clientEmail = validateFormData( $_POST['clientEmail']);
  }

  //these inputs not required
  $clientPhone = validateFormData( $_POST['clientPhone']);
  $clientAddress = validateFormData( $_POST['clientAddress']);
  $clientCompany = validateFormData( $_POST['clientCompany']);
  $clientNotes = validateFormData( $_POST['clientNotes']);

  //see if required fields have data
  if($clientName && $clientEmail){
    //create a $query
    $query = "INSERT INTO clients(id, name, email, phone, address, company, notes, date_added) VALUES(NULL, '$clientName', '$clientEmail', '$clientPhone', '$clientAddress', '$clientCompany', '$clientNotes', CURRENT_TIMESTAMP)";

    $result = mysqli_query($conn, $query);

    if( $result ){
      header('Location: clients.php?alert=success');
    }else{
      echo "Error " . $query . "<br>" . mysqli_error($conn);
    }
  }
}

mysqli_close($conn);
include('includes/header.php');
?>

<h1>Add Client</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row">
    <div class="form-group col-sm-6">
      <?php echo $nameError; ?>
        <label for="client-name">Name *</label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value=<?php echo $clientName; ?>>
    </div>
    <div class="form-group col-sm-6">
      <?php echo $emailError; ?>
        <label for="client-email">Email *</label>
        <input type="text" class="form-control input-lg" id="client-email" name="clientEmail" value=<?php echo $clientEmail; ?>>
    </div>
    <div class="form-group col-sm-6">
        <label for="client-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="client-phone" name="clientPhone" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-address">Address</label>
        <input type="text" class="form-control input-lg" id="client-address" name="clientAddress" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Company</label>
        <input type="text" class="form-control input-lg" id="client-company" name="clientCompany" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-notes">Notes</label>
        <textarea type="text" class="form-control input-lg" id="client-notes" name="clientNotes"></textarea>
    </div>
    <div class="col-sm-12">
            <a href="clients.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Add Client</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>
