<?php
	include("config.php");
	session_start();
	
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$username = $mysqli->real_escape_string($username);

	$query = "SELECT username, password FROM sadl WHERE user = '$username' AND pass = '$password'";
	$result = $mysqli->query($query);
	
	if($result->num_rows == 1){
		$_SESSION['sadl'] = $username;
		header('location: nav.php');
	} else {
		header('location: login.php');
	}


?>