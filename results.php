<?php
  // cost 
  $cost= "";

  // get the input from text field
  $age = intval($_POST['age']);
  $day = $_POST['day'];

    // calculate the volume
  if ($age <= 0) {
		$cost = "Please fill in the age requirement.";
	}
  else if ($age < 5 || $age > 95) {
		$cost = "The admisson cost for you is FREE!";
	}
	else if (($day == "Tuesday") || ($day == "Thursday)") 
			 || ($age >=12) && ($age <=21)) {
		$cost = "Yay! You get a student discount.";
	}
	else if (($age > 0) || ($day != "")) {		
		$cost = "No discount for you. You have to pay regular price.";
	}

  echo $cost;
?>
