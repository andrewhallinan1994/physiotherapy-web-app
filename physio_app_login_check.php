<?php
	
	$login_username = $_REQUEST['login_username'];
	$login_password = $_REQUEST['login_password'];
	
	$logged_in = false;
	
	
	// Attempting MySQL server connection
	$host = 'tester.cfyc7cyat27p.eu-west-1.rds.amazonaws.com';
	$user = 'admin';
	$pass = 'tenderoni123';
	$db_name = 'tester';
	
	
	$link = new mysqli($host, $user, $pass, $db_name);
	
	if($link->connect_error){
		die('Connect error: ' .$link->connect_error);
	}
	
	
	//SQL looks through physio_app_users table to see if the login username and login password matches any of the usernames and corresponding password in the db in the db
	$sql = "SELECT * FROM physio_app_users";
	
	
	
	
	if($result = mysqli_query($link, $sql)){
		    if(mysqli_num_rows($result) > 0){
		        
		        while($row = mysqli_fetch_array($result)){
		            $id = $row['id'];
		            $user_id = $row['user_id'];
		            $username_trimmed = $row['name'];
		            $password_trimmed = $row['password'];
		            
					if($login_username==$username_trimmed && $login_password==$password_trimmed){
						$logged_in = true;
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
		 
		// Close connection
		mysqli_close($link);
		
	
		if($logged_in == true){
			$login_username_echo = $login_username;
			$login_password_echo = $login_password;
		} else{
			$login_username_echo = 'USERNAME ERROR';
			$login_password_echo = 'PASSWORD ERROR';
		}
		
?>


<html>
	
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
</head>	
<body>
	
	Welcome <?php echo $login_username_echo; ?><br>
	Your password is: <?php echo $login_password_echo; ?>
	
	<input type="text" id="login_username_echo" value="<?php echo $login_username_echo; ?>" hidden>
	<input type="text" id="login_password_echo" value="<?php echo $login_password_echo; ?>" hidden>
	
	<button type="button" class="btn btn-primary" onclick="open_index_page();">Return</button>
	<!-- <button type="button" class="btn btn-primary" onclick="open_index_page(<?php echo $login_username_echo; ?>, <?php echo $login_password_echo; ?>) ;">Return</button>	-->	
	
</body>

</html>

<script>
	
	function open_index_page(){
	
		var login_username = $("#login_username_echo").val();
		var login_password = $("#login_password_echo").val();
		console.log("Username is " +login_username);
		console.log("Password is " +login_password);
			
		var checking=$.post("index.php",{ login_username: ""+login_username+"", login_password: ""+login_password+""}, function(data){		
				
			if(data.length >0){
				
				console.log(data);
				
				if(data.trim()=="OK"){
					window.open('index.php', '_self');
				}else{
					alert(data); 
				}
			
			} else{
				
			}
		});
	
		
	}
	
</script>
