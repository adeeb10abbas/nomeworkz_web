<?php
	$hostname = "localhost";
	$username = "nomeworkz";
	$password = "6?UhnjY5)sK%";
	$db = "nome";

	$con = mysqli_connect($hostname,$username,$password,$db);
	if ($con) {
		echo "";
	}
	else
	{
		die("Connection failed because".mysqli_connect_error());
	}
?>

