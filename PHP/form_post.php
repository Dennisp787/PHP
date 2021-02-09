<?php
	define("TITLE", "Form Post");
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE;?></title>
</head>
<body>
	Hello <?php 
		echo $_POST['post_name']; 
	?> <br>
	
	Your email is <?php 
		echo $_POST['post_email'];
	?>
</body>
</html>