<?php
	
	$app_category = $_REQUEST['app_category'];
	
	$sign_up_username = $_REQUEST['sign_up_username'];
	$password = $_REQUEST['password'];
	
	$age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];
	$height = $_REQUEST['height'];
	$weight = $_REQUEST['weight'];
	
	
	// Attempting MySQL server connection
	$host = 'tester.cfyc7cyat27p.eu-west-1.rds.amazonaws.com';
	$user = 'admin';
	$pass = 'tenderoni123';
	$db_name = 'tester';
	
	
	$link = new mysqli($host, $user, $pass, $db_name);
	
	if($link->connect_error){
		die('Connect error: ' .$link->connect_error);
	}
	 
	// Attempts SQL insert query
	$sql = "INSERT INTO physio_app_users (name, age, account_type, last_completed_exercise, height, weight, gender, password) values ('".$sign_up_username."', ".$age.", '".$app_category."', '2020-01-01 12:00:00.000000', ".$height.", ".$weight.", '".$gender."' , '".$password."')";    
	if(mysqli_query($link, $sql)){
	    echo "New user successfully created.";
	} else{
	    echo "ERROR: Could not create new user, unable to execute $sql. " . mysqli_error($link);
	}
	-
	// Closes MySQL connection
	mysqli_close($link);
	

?>
