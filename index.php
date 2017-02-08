<?php


	$filename = 'recipes.sql';
	$servername = "localhost";
	$database = "test";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");
	mysql_select_db($database) or die('Error selecting MySQL database: ' . mysql_error());


	// Temporary variable, used to store current query
	$templine = '';
	// Read in entire file
	$lines = file($filename);
	// Loop through each line
	foreach ($lines as $line)
	{
	// Skip it if it's a comment
	if (substr($line, 0, 2) == '--' || $line == '')
	    continue;

	// Add this line to the current segment
	$templine .= $line;
	// If it has a semicolon at the end, it's the end of the query
	if (substr(trim($line), -1, 1) == ';')
	{
	    // Perform the query
	    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
	    // Reset temp variable to empty
	    $templine = '';
	}
	}

	//get search query from search box
	$select = $_POST["query"];
	$sql = "SELECT NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD FROM recipes WHERE NAME like '%".$select."%'";

	$hasil = $conn->query($sql);
	
	while($result = mysqli_fetch_array($hasil)){
	  echo "Name: " . $result["NAME"]. "<br><br> Type: " . $result["TYPE"]. "<br><br> Calories: ". $result["CALORIES"]. "<br><br> Ingredients: ". $result["INGREDIENT"]. "<br><br> Vegetarian: ". $result["VEGETARIAN"]."<br><br> Difficulty: ". $result["DIFFICULTY"]."<br><br> Serving: ". $result["SERVING"]."<br><br> Duration: ". $result["DURATION"]."<br><br> Method: ". $result["METHOD"]."<br><br>";
	}

	

	
?>