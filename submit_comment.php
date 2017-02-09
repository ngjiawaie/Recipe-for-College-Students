<?php
	$servername = "localhost";
	$database = "college_recipes";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");

	$recipeID = (int)$_POST["recipeID"];
	$comment = $_POST["comment"];
	$name = $_POST["name"];
	$sql = "INSERT INTO comments VALUES(NULL,'".$comment."',".$recipeID.",'".$name."')";
	$conn->query($sql);
	
	$conn->close();
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>