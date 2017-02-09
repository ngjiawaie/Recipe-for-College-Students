<!DOCTYPE html>
<html>
<head>
	<?php
		$servername = "localhost";
		$database = "college_recipes";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");

		$recipeID = $_GET["recipeID"];
		$sql = "SELECT ID,NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD, URL FROM recipes WHERE ID = ".$recipeID;
	
		$hasil = $conn->query($sql);
		
		$result = mysqli_fetch_array($hasil)
	?>
	<title><?php echo $result["NAME"] ?></title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" type="text/css" href="recipe.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
<!-- 		<div class="back">
			<a href="index.php">Return to home page</a>
		</div> -->
		<h1><?php echo $result["NAME"] ?> </h1>
		<div class="details">
			<div class="pic">
				<?php echo '<img src="'.$result["URL"].'"/>'; ?>
			</div>
			<div class="description">
				<table>
					<tr>
						<th>Duration:</th>
						<td><?php echo '~'.$result["DURATION"].' minutes'; ?></td>
					</tr>
					<tr>
						<th>Servings:</th>
						<td><?php echo 'Serves around '.$result["SERVING"].' people'; ?></td>
					</tr>
					<tr>
						<th>Vegetarian:</th>
						<td><?php echo $result["VEGETARIAN"]; ?></td>
					</tr>
					<tr>
						<th>Calories:</th>
						<td><?php echo $result["CALORIES"]; ?></td>
					</tr>
					<tr>
						<th>Difficulty:</th>
						<td><?php echo $result["DIFFICULTY"]; ?></td>
					</tr>
				</table>
				<br>
				<input type="button" name="print" value="Print" onClick="window.print()" class="print_btn">
			</div>
		</div>
		<div class="ingredients">
			<h2>Ingredients: </h2>
			<?php 		
				$ingredients = preg_split('/,/', $result["INGREDIENT"]);
				echo '<ul>';
				foreach($ingredients as $values){
					if(!empty($values)){
						echo '<p><li>'.$values.'</li></p>';
					}
				}
				echo '</ul>';
			?> 
		</div>
		<div class="method">
			<h2>Method:</h2>
			<?php
				$method = preg_split('/\d\./', $result["METHOD"]);
				echo '<ol>';
				foreach($method as $methods){
					if(!empty($methods)){
						echo '<p><li>'.$methods.'</li></p>';
					}
				}
				echo '</ol>';
			?>
			<hr>
		</div>
		<div class="comments">
			<p>Comment section here</p>
		</div>
	</div>
</body>
</html>