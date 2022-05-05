<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Movie, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Museum admission cost</title>
  </head>
  <body><center>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Museum Admission Cost";?></h1></center>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/muse.jpg" alt="Museum" width="50%" height="auto"></center>';
    ?>

    <!-- user input -->
      <form action="./results.php" method="post" target="results">  
        <label for=age">Please enter your age:</label>
        <input type="number" name="age" step="1" min="0">
      <br>
      <br>
      <!-- days -->
				<label for="day">*Day:</label>
					<select name="day" id="day">
						<option value="">--Day of the Week--</option>
						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
					  <option value="Thursday">Thursday</option>
					  <option value="Friday">Friday</option>
				  <option value="Saturday">Saturday</option>
				</select>
			<br><br>
			<input type="submit" value="Display Admission Cost">
	    </form>
	  </td>
	  <td valign="top" align="center">
      
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>
      
    </form></center>
    <br>
    <br>
  </body></center>
</html>