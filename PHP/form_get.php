<?php
	define("TITLE", "Form Get");
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE;?></title>
</head>
<body>
	Hello <?php 
		echo $_GET['name']; 
	?> <br>
	
	Your email is <?php 
		echo $_GET['email'];
	?>
</body>
</html>