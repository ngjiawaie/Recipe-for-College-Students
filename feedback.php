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
					<form>
						<input type="search" name="query" placeholder="Search..." />
					</form>
				</div>
			</div>
		</header>

		<div class="content-wrapper">
			<h1> Feedback Form </h1><br>
			<div class="card">
				<form id="ff" method="post" action="submit_feedback.php">
					<p><label>
						<input type="text" name="name" placeholder="Name (Required)" autofocus required/> 
					</label></p>
					<p><label>
						<input type="email" name="email" placeholder="Email (Required)" required/>
					</label></p>
					<p><label>
						<textarea form="ff" rows="5" cols="100" name="request" placeholder="What do you think we should improve on?" required/></textarea>
					</label></p>
					<p><input type="submit" value="Submit"/> <input type="reset" value="Clear Form"/></p>
				</form>
			</div>
		</div>
	</body>
</html> 