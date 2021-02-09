<?php 
	//FUNCTIONS.PHP
	function checkforClickBait(){
		// grab value from textarea in $_POST collection
		// make all letters lowercase using strtolower() function
		// store in a variable
		$clickbait = strtolower($_POST["clickbait_headline"]);
		
		//store array of clickbait sounding phrases
		$a = array(
			"scientist",
			"doctors",
			"hate",
			"stupid",
			"weird",
			"simple",
			"trick",
			"shocked me",
			"ypu'll never believe",
			"hack",
			"spic",
			"unbelievable"
		);
		
		//store replacement words in array
		/* make sure each replacement is in the same order as the clickbait word you're trying to replace */
		
		$b = array(
			"so-called scientist",
			"so-called doctors",
			"aren't threatened by",
			"average",
			"completely normal",
			"ineffective",
			"method",
			"is no different than the others",
			"you won't really be surprised by",
			"slightly improved",
			"boring",
			"normal"
		);
		
		//use str_replace to replace the words
		//uppercase the first letter in every word using ucwords() function
		// store in a variable
		$honestheadline = str_replace( $a, $b, $clickbait);
		
		return array($clickbait, $honestheadline);
	}
	
	function displayHonestHeadline( $x, $y ){
		
		echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";
					
		echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
	}

?>