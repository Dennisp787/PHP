<?php
	define("TITLE", "PHP Arrays")
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo TITLE; ?></title>
	</head>
	<body>
	
		<h1><?php echo TITLE; ?></h1>
		<?php
		
		// SIMPLE ARRAY
		$user = array(
				"johndoe", //0
				"John Doe", //1
				32, //2
				"male", //3
				"Mexico" //4
				);
		
		//ECHO VALUE OF ARRAY		
		echo $user[0] ."<br>";
		echo $user[1] ."<br>";
		echo $user[2] ."<br>";
		echo $user[3] ."<br>";
		echo $user[4] ."<br>";
		
		//ASSOCIATIVE ARRAYS
		
		$people = array(
				"username" => "johndoe", 
				"fullname" => "John Doe", 
				"age" 	   => 32,
				"gender"   => "male", 
				"country"  => "Mexico" 
				);
				
		//ECHO VALUES OF THE ARRAY
		
		echo $people["username"] ."<br>";
		echo $people["fullname"] ."<br>";
		echo $people["age"] ."<br>";
		echo $people["gender"] ."<br>";
		echo $people["country"] ."<br>";
		
		
		//MULTI DIMENSIONAL ARRAY
		
		$employees = array(
		
						array( //index of 0
						"username" => "johndoe", 
						"fullname" => "John Doe", 
						"age" 	   => 32,
						"gender"   => "male", 
						"country"  => "Mexico" 
						),
						
						array( //index of 1
						"username" => "janedoe", 
						"fullname" => "Jane Doe", 
						"age" 	   => 28,
						"gender"   => "female", 
						"country"  => "Canada" 
						)
		);
		
		//ECHO OF CALUES IN MULTIDIMENSIONAL ARRAY
		echo "<br><br>";
		echo $employees[0]["fullname"] ."<br>";
		echo $employees[1]["username"] ."<br>";
		?>
		
	</body>
</html>