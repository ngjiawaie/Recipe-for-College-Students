<?php
	$servername = "localhost";
	$database = "college_recipes";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $database)or die("connection problems");
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$request = $_POST["request"];
	$sql = "INSERT INTO requests (ID, NAME, EMAIL, REQUEST) VALUES (NULL,'$name','$email','$request')";

	$conn->query($sql);
	$conn->close();

	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>