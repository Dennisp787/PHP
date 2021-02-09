<?php
	define("TITLE", "PHP Project: Clickbait");
	include("functions.php");
	
	if( isset($_POST["fix_submit"])){
		//call the function
		
		checkforClickBait();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo TITLE; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
			<h1><?php echo TITLE;?></h1>
			<p class="lead">Hate Clickbait? Turn these annoying headlines into realistic and honest ones using this simple program.</p>
			
			<div class="row">
			<form class="col-sm-8 col-sm-offest-2" action="" method="post">
				<textarea placeholder="Place clickbait headliner here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
				<button type="submit" class="btn btn-primary btn-lg pull-right" name ="fix_submit">Make Honest.</button>
			</form>
			</div>
			
			<?php
				if( isset($_POST["fix_submit"])){
					//get first value in array by checkforClickBait
					//store in variable
					$clickbait = checkforClickBait()[0];
					$honestheadline = checkforClickBait()[1];
					
					displayHonestHeadline($clickbait, $honestheadline);
				}
			
			?>
		</div>
	
	<!-- jQuery, Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>