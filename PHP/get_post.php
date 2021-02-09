<?php
	define("TITLE", "Get &amp; Post");
	if( isset($_POST["post_submit"])){
		//build a function that validates the data
		function validateFormData( $formData ){
		$formData = trim( stripslashes(htmlspecialchars($formData)));
		return $formData;
		}
		 //check to see if inputs are empty
		 //creat variables with form data
		 //wrap data with function
		 if(!$_POST['post_name']){
		 	$nameError = "Please enter yor name <br>";
		 }else{
		 	$name = validateFormData($_POST["post_name"]);
		 }
		 if(!$_POST['post_email']){
		 	$emailError = "Please enter yor email <br>";
		 }else{
		 	$email = validateFormData($_POST["post_email"]);
		 }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE;?></title>
	</head>
	<body>
		<div class="container">
			<h1><?php echo TITLE;?></h1>
		
			<!-- Only use get method for search forms as inputed data is shown in url bar -->			
			<h4>Submitted via $_GET</h4>
			<form action="form_get.php" method="get">
				<input type="text" placeholder="Name" name="name">
				<input type="text" placeholder="Email" name="email">
				<input type="submit" name="form_submit">
			</form>
			<hr>
			<!-- Use post method for sensative data-->
			<h4>Submitted via $_POST</h4>
			<form action="form_post.php" method="post">
				<input type="text" placeholder="Name" name="post_name">
				<input type="text" placeholder="Email" name="post_email">
				<input type="submit" name="form_submit">
			</form>
			<hr>
			
			<h4>Submitted on Page</h4>
			<p>* Required Field</p>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
				<small>* <?php echo $nameError?></small>
				<input type="text" placeholder="Name" name="post_name"><br>
				<small>* <?php echo $emailError?></small>
				<input type="text" placeholder="Email" name="post_email"><br>
				<input type="submit" name="post_submit">
			</form>
			<?php
				if(isset($_POST["post_submit"])){
					echo "<h4>Your Info</h4>";
					echo "$name <br> $email <br>";
				}
			?>
		</div>
	</body>
</html>