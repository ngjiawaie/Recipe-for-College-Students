<?php



	$servername = "localhost";
	$database = "college_recipes";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");



	//get search query from search box
	$select = $_POST["query"];
	$sql = "SELECT NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD FROM recipes WHERE NAME like '%".$select."%'";

	$hasil = $conn->query($sql);
	
	while($result = mysqli_fetch_array($hasil)){
	  echo "Name: " . $result["NAME"]. "<br><br> Type: " . $result["TYPE"]. "<br><br> Calories: ". $result["CALORIES"]. "<br><br> Ingredients: ". $result["INGREDIENT"]. "<br><br> Vegetarian: ". $result["VEGETARIAN"]."<br><br> Difficulty: ". $result["DIFFICULTY"]."<br><br> Serving: ". $result["SERVING"]."<br><br> Duration: ". $result["DURATION"]."<br><br> Method: ". $result["METHOD"]."<br><br>";
	}

	

	
?>