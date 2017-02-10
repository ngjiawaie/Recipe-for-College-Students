<!DOCTYPE html>
<html>
<head>
	<title>Simple Recipies</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<?php
		$servername = "localhost";
		$database = "college_recipes";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");

		//get search query from search box
		$select = $_POST["query"];
		$sql = "SELECT ID,NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD, URL FROM recipes WHERE NAME like '%".$select."%'";


		$hasil = $conn->query($sql);
		$hasil2 = $conn->query($sql);
	?>
</head>
	
	<body>
		<header>
			<div class="logo"><a href="index.php">Recipe For All</a></div>
			<div class="right">
				<div class="search">
					<form method="post" action="search.php">
						<input type="search" name="query" placeholder="Search..." />
					</form>
				</div>
				<div class="feed">
					<a id="fb" href="feedback.php">Feedback</a>
				</div>
			</div>
		</header>

		<div class="content-wrapper">
			<h2>Search results:</h2>
				<?php
					$result = mysqli_fetch_array($hasil2);
					if(empty($result)){
						echo "<p>No results found :( You can feedback us on what recipe you want!</p><p>A few alternative suggestions:</p>";
						$sql = "SELECT ID,NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD, URL FROM recipes ORDER BY RAND() LIMIT 3;";
						$hasil = $conn->query($sql);
					}
				?>
			<div class="content">
			<?php
					while($result = mysqli_fetch_array($hasil)){
					echo '<div class="recipe" onclick = "submitForm('.$result["ID"].')">
							<div class="foodimg">
								<img src="'.$result["URL"].'">
							</div>
								<div class="recipeDetails" >'
								.'<h3>'.$result["NAME"].'</h3>'
								.'	<form method="get" action="recipe.php" name="recipe" value="View Recipe"  id='.$result["ID"].'>
											<input type="hidden" name="recipeID" value='.$result["ID"	].' id="submit_hidden">
									</form>
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