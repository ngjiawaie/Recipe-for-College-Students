<?php


	$filename = 'recipes.sql';
	$servername = "localhost";
	$database = "test";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");
	mysql_select_db($database) or die('Error selecting MySQL database: ' . mysql_error());
	
	//get search query from search box
	if (isset($_POST["query"])) {
		$asd = $_POST["query"];
	}

	$sql = "SELECT NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD FROM recipes WHERE NAME like '%".$asd."%'";

	$hasil = $conn->query($sql);


	if (empty($hasil)) {
		$sqll="DROP TABLE IF EXISTS `recipes`;
		CREATE TABLE IF NOT EXISTS `recipes` (
				  `ID` int(100) NOT NULL,
				  `NAME` varchar(1000) NOT NULL,
				  `TYPE` varchar(10) NOT NULL,
				  `DIFFICULTY` varchar(20) NOT NULL,
				  `VEGETARIAN` varchar(3) NOT NULL,
				  `CALORIES` bigint(255) NOT NULL,
				  `DURATION` bigint(255) NOT NULL,
				  `SERVING` int(100) NOT NULL,
				  `INGREDIENT` text NOT NULL,
				  `METHOD` text NOT NULL,
				  `URL` longtext NOT NULL
				) ";
		$hasil=$conn->query($sqll);
		// Temporary variable, used to store current query
		$temp_var = '';
		// Read in entire file
		$all_lines = file($filename);
		// Loop through each each_line
		foreach ($all_lines as $each_line)
		{
		// Skip it if it's a comment
		if (substr($each_line, 0, 2) == '--' || $each_line == '')
		    continue;

		// Add this each_line to the current segment
		$temp_var .= $each_line;
		// If it has a semicolon at the end, it's the end of the query
		if (substr(trim($each_line), -1, 1) == ';')
		{
		    // Perform the query
		    mysql_query($temp_var) or print('Error performing query \'<strong>' . $temp_var . '\': ' . mysql_error() . '<br /><br />');
		    // Reset temp variable to empty
		    $temp_var = '';
		}
		}
	}

	while($result = mysqli_fetch_array($hasil)){
	  echo "Name: " . $result["NAME"]. "<br><br> Type: " . $result["TYPE"]. "<br><br> Calories: ". $result["CALORIES"]. "<br><br> Ingredients: ". $result["INGREDIENT"]. "<br><br> Vegetarian: ". $result["VEGETARIAN"]."<br><br> Difficulty: ". $result["DIFFICULTY"]."<br><br> Serving: ". $result["SERVING"]."<br><br> Duration: ". $result["DURATION"]."<br><br> Method: ". $result["METHOD"]."<br><br>";
	}

	

	
?>
