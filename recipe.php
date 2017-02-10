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

		$sql = "SELECT * FROM comments WHERE id = ".$recipeID;
	
		$comment = $conn->query($sql);
		
		$result = mysqli_fetch_array($hasil);
		if(empty($result)){
 		  header("Location: index.php");
		}
	?>
	<title><?php echo $result["NAME"] ?></title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="recipe.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
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
		<div class="recipeHeading card">
			<div class="pic">
				<?php echo '<img src="'.$result["URL"].'"/>'; ?>
			</div>
			<div class="description">
				<h1 class="recipeName"><?php echo $result["NAME"] ?> </h1>
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
				<?php
					echo '<div class="fb-share-button" data-href="http://localhost/recipe/recipe.php?recipeID='. $result["ID"] .'" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>'

				 ?>
			</div>
		</div>
		<div class="ingredients card">
			<h2>Ingredients: </h2>
			<div class="ingredient-content">
				<?php 		
					$ingredients = preg_split('/@/', $result["INGREDIENT"]);
					echo '<ul>';
					foreach($ingredients as $values){
						if(!empty($values)){
							echo '<p><li>'.$values.'</li></p>';
						}
					}
					echo '</ul>';
				?> 
			</div>
		</div>
		<div class="method card">
			<h2>Method:</h2>
			<div class="method-content">
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
			</div>
		</div>
		<div class="comments">
			<h1 class="comments-title">Comments</h1>
			<?php 
				while($result_comment = mysqli_fetch_array($comment)){
					echo	'<div class="comments-item card">
								<h3>'.$result_comment["Name"].'</h3>
								<p>'.$result_comment["comment"].'</p>
							</div>';
				}
			?>
			<h1 class="req">Submit a comment</h1>
			<form action="submit_comment.php" method="post" id="cmt">
				<input type="hidden" name="recipeID" value=<?php echo $result["ID"]; ?>>
				<input type="text" name="name" placeholder="Name (Required)" required>
				<label><p><textarea form="cmt" rows="5" cols="100" name="comment" placeholder="Anything you want to comment?"></textarea></label></p>
				<input type="submit" name="submit" value="Submit comment">
			</form>
		</div>
	</div>
</body>
</html>