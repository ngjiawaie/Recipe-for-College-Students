<!DOCTYPE html>
<html>
	<head>
		<title>Feedback Form</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="feedback.css">
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
			<?php 
				if(isset($_GET["message"])){
					echo '<p class="thx">Thank you for your feedback!</p>';
				}
			?>
			<h1> Feedback Form </h1>
			<h3>You can request for a recipe to be on our website, or suggest improvements to help us improve our website!</h3><br>
			<div class="card">
				<form id="ff" method="post" action="submit_feedback.php">
					<div class="name">
						<input type="text" name="name" placeholder="Name (Required)" autofocus required/> 
					</div>
					<div class="email">
						<input type="email" name="email" placeholder="Email (Required)" required/>
					</div>
					<div class="message">
						<textarea form="ff" rows="5" cols="100" name="request" placeholder="What do you think we should improve on?" required/></textarea>
					</div>
					<p><input type="submit" value="Submit"/> <input type="reset" value="Clear Form"/></p>
				</form>
			</div>
		</div>
	</body>
</html> 