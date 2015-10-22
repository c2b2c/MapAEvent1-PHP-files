<?php
	$dburl = 'mapaevent1.cievuwypzozw.us-west-2.rds.amazonaws.com';
	$dbuser = 'public';
	$dbpassword = 'publicpublic';
	$dbname = 'mapaevent1';
	$conn = mysqli_connect($dburl,$dbuser,$dbpassword,$dbname);
	if (mysqli_connect_error()) {
	    die("Database connection failed: " . mysqli_connect_error());
	}
	ini_set('display_errors', 'On');
?>
