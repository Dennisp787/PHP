<?php
	define("TITLE", "PHP Variables and Constants" );
?>

<!DOCTYPE html>
<html>
	<head> 
		<title><?php echo TITLE;?></title>
	</head>
	<body> 
		<?php
			
			//String: Simple text that must be in single quotations or double quotations
			$yourVariable = "Hello world!";
			$fullName = "Dennis Phillips";
			
			//BOOLEAN: A boolean variable specifies a value of true or false
			$loggedIn = true;
			
			//INTEGER: any whole number
			$myAge = 33;
			
			//FLOATING POINT: Usually a fractional number with a deciaml
			$totalPrince = 146.28;
			
			//DISPLAY VARIABLE ON SCREEN
			
			echo "Hello my name is $fullName and I am $myAge years old!<br>";
			
			//CONSTANTS: constants cant be changed *CONTSANTS are case senstaive
			define("TITLE", "PHP variables and constants" );
			echo TITLE;
			
				
		?>
	</body>
</html>