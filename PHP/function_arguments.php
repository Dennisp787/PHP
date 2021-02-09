<?php
	define ("TITLE", "Functions and Arguments");
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?></title>
	</head>
	<body>
		<div class="container">
			<h1><?php echo TITLE;?></h1>
			<?php
			
				function myFirstFunction(){
				
					$a = 0;
					do{
						echo "$a &nbsp";
						$a++;
					}while( $a <= 100);
				}
				
				myFirstFunction();
				
				function mySecondFunction($a){
					do{
						echo "$a &nbsp";
						$a++;
					}while( $a <= 10);
				}
				echo "<br>";
				mySecondFunction(5);
				echo "<br>";
				
				function addTogether($num1, $num2){
					$newNum = $num1 + $num2;
					echo "$num1 + $num2 = $newNum";
				}
				addTogether(22,88);
			
			
			?>
		</div>
	</body>
</html>