<!DOCTYPE html>
<html>
	<head>
		<title>PHP basics</title
	</head>
	<body>
		<?php
			echo "hello!";
		?>
		<!-- COMMENTS -->
		<?php 
			// single line comment
			# single line comment
			
			/* 
			mult
			line
			comment
			*/
		?>
		<!-- NOT CASE SENSATIVE -->
		<?php
			print("hello world!<br>");
			Print("hello world!<br>");
			PRINT("hello world!<br>");
			
			#Variables are case sensative
			
			$name = "Dennis";
			
			echo "Hello " . $name . ".<br>";
			echo "Hello " . $Name . ".<br>";
			echo "Hello " . $NAME . ".<br>";
		
		?>
		<a href="variables.php">PHP Variables</a><br>
		<a href="arrays.php">PHP Arrays</a><br>
		<a href="clickbait.php">PHP Project: Clickbait</a><br>
		<a href="function_arguments.php">Functions and Arguments</a><br>
		<a href="get_post.php">Get and Post</a><br>
		<!-- <a href="function_arguments.php">Functions and Arguments</a><br> -->
		
	</body>
</html>