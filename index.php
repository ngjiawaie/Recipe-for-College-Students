<!DOCTYPE html>
<html>
<head>
	<title>Simple Recipies</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		$servername = "localhost";
		$database = "test";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");

		//get search query from search box
		// $select = $_POST["query"];
		// $sql = "SELECT NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD FROM recipes WHERE NAME like '%".$select."%'";
		$sql = "SELECT ID,NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD, URL FROM recipes";
	
		$hasil = $conn->query($sql);
		
		// while($result = mysqli_fetch_array($hasil)){
		//   echo "Name: " . $result["NAME"]. "<br><br> Type: " . $result["TYPE"]. "<br><br> Calories: ". $result["CALORIES"]. "<br><br> Ingredients: ". $result["INGREDIENT"]. "<br><br> Vegetarian: ". $result["VEGETARIAN"]."<br><br> Difficulty: ". $result["DIFFICULTY"]."<br><br> Serving: ". $result["SERVING"]."<br><br> Duration: ". $result["DURATION"]."<br><br> Method: ". $result["METHOD"]."<br><br>";
		// }
	?>
</head>
<body>
	<header>
		<div class="logo"><a href="index.php">Recipe For All</a></div>
		<div class="right">
			<div class="search">
				<form>
					<input type="search" name="query" placeholder="Search..." />
				</form>
			</div>
		</div>
	</header>
	<div class="content-wrapper">
		<h3>Recommendations: </h3>
		<div class="content">
			<?php
				while($result = mysqli_fetch_array($hasil)){
				echo '<div class="recipe" onclick = "submitForm('.$result["ID"].')">
						<div class="foodimg">
							<img src="'.$result["URL"].'">
						</div>
							<div class="recipeDetails" >'
							.'<h3>'.$result["NAME"].'</h3>'
							.'	<div class="view-recipe">
									<form method="get" action="recipe.php" name="recipe" value="View Recipe"  id='.$result["ID"].'>
										<input type="hidden" name="recipeID" value='.$result["ID"	].' id="submit_hidden">
									</form>
								</div>
							</div>
					</div>';
				}
			?>
		</div>
	</div>
	<script>
	function submitForm(id){
		document.getElementById(id).submit();
	}
	</script>

</body>
</html>
