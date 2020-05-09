<?php
	
	$username_entered = '';
	$username_entered = $_REQUEST['sign_up_username'];
	//echo 'Username received from POST is: ' .$username_entered .'<br>';
	
	// Attempting MySQL server connection
	$host = 'tester.cfyc7cyat27p.eu-west-1.rds.amazonaws.com';
	$user = 'admin';
	$pass = 'tenderoni123';
	$db_name = 'tester';
	
	
	$link = new mysqli($host, $user, $pass, $db_name);
	
	if($link->connect_error){
		die('Connect error: ' .$link->connect_error);
	}
	
	
	$is_name_already_in_db = 'false';
	
	
	//Uses sql to look through the physio_app_users table
	$sql = "SELECT * FROM physio_app_users";
	
	if($result = mysqli_query($link, $sql)){
		
	    if(mysqli_num_rows($result) > 0){
	        
	        while($row = mysqli_fetch_array($result)){
	            
	            $name_trimmed = $row['name'] ;
	            //echo 'The username: ' .$name_trimmed. ' is in the db' .'<br>';
				
				if($name_trimmed == $username_entered){
					echo 'The username: ' .$name_trimmed. ' has already been taken by another user';
					
					$is_name_already_in_db = 'true';
				}
				
	        }
	        
			
	        // Free result set
	        mysqli_free_result($result);
			
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	
	
	/*	
	$getData = sqlsrv_query($conn, $SQL);			//sqlsrv_query prepares and executes a query
	
	while($row_Cust2 = sqlsrv_fetch_array($getData,SQLSRV_FETCH_ASOC)){
		
		$name_trimmed = trim($row_Cust2['FirstName']);
		echo 'The username: ' .$name_trimmed. ' has already been taken by another user';
		
		if($name_trimmed == $username_entered){
			
			$is_name_already_in_db = 'true';
			
		}
	}			*/
	
	
	if($is_name_already_in_db == 'false'){
		$sign_up_button = '<button type="button" class="btn btn-primary" onclick="save_new_user();" style="width:100%"> Sign up new user</button> ';
	}
	
	if($is_name_already_in_db == 'true'){
		$sign_up_button = ' ';
	}
	
	echo $sign_up_button;
	
	
?>


