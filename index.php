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

		$sql = "SELECT ID,NAME,TYPE,CALORIES,INGREDIENT,VEGETARIAN,DIFFICULTY,SERVING,DURATION,METHOD, URL FROM recipes ORDER BY RAND() LIMIT 6;";

		$sql_1 = "SELECT ID,NAME, URL FROM recipes ORDER BY RAND() LIMIT 4;";
	
		$hasil = $conn->query($sql);
		$photo = $conn->query($sql_1);
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

	<div class="imageSlider">
		<h2>Today's special</h2>
		<?php 
			while($result = mysqli_fetch_array($photo)){
				echo '<img class="mySlides" src ="'.$result["URL"].'">';
			}
		?>
	</div>
	<script type="text/javascript">
		var slideIndex = 0;
		carousel();
		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		      	x[i].style.display = "none"; 
		    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1} 
		    x[slideIndex-1].style.display = "block"; 

		    setTimeout(carousel, 2500); // Change image every 2 seconds
		}

	</script>

	<div class="content-wrapper">
		<h2>Recommendations: </h2>
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