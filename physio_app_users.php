<?php
	
	$url = parse_url(getenv("mysql://b27cdeb44b89ff:38c7780c@eu-cdbr-west-02.cleardb.net/heroku_aec4c9a333c49a9?reconnect=true"));

	$server = $url["eu-cdbr-west-02.cleardb.net"];
	$username = $url["b27cdeb44b89ff"];
	$password = $url["38c7780c"];
	$db = substr($url["heroku_aec4c9a333c49a9"], 1);

	//$link = new mysqli($server, $username, $password, $db);			//can use $link or $conn
	$link = mysqli_connect($server, $username, $password, $db);
	
	
	/*
	// Attempt MySQL server connection. Assuming you are running MySQL
	//server with default setting (user 'root' with no password) 
	$link = mysqli_connect("localhost", "root", "", "tutorial");		//mysqli_connect("IP address of DB", "username", "password", "DB name");
	*/
	
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	 
	// Attempt select query execution
	$sql = "SELECT * FROM physio_app_users";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        $user_table = "<table class=\"table\">";
	            $user_table .= "<tr>";
	                $user_table .= "<th>id</th>";
	                $user_table .= "<th>user id</th>";
	                $user_table .= "<th>name</th>";
	                $user_table .= "<th>age</th>";
					$user_table .= "<th>account type</th>";
	                $user_table .= "<th>last completed exercise on</th>";
					$user_table .= "<th>height(cm)</th>";
	                $user_table .= "<th>weight(kg)</th>";
					$user_table .= "<th>gender</th>";
	            $user_table .= "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            $user_table .= "<tr>";
	                $user_table .= "<td>" . $row['id'] . "</td>";
	                $user_table .= "<td>" . $row['user_id'] . "</td>";
	                $user_table .= "<td>" . $row['name'] . "</td>";
	                $user_table .= "<td>" . $row['age'] . "</td>";
					$user_table .= "<td>" . $row['account_type'] . "</td>";
	                $user_table .= "<td>" . $row['last_completed_exercise'] . "</td>";
					$user_table .= "<td>" . $row['height'] . "</td>";
	                $user_table .= "<td>" . $row['weight'] . "</td>";
					$user_table .= "<td>" . $row['gender'] . "</td>";
	            $user_table .= "</tr>";
	        }
	        $user_table .= "</table>";
			
			//echo $user_table;
			
			
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
	
	
?>



<html>
	
 <head>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
 </head>
	
 <body>
		
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      
      <div class="col sm-4">
      </div>
      
      
      <div class="navbar-brand col-sm-4 text-center" href="#">
      	Physio app users (Admin. view only)
      </div>
      
      <ul class="navbar-nav col-sm-4 text-right">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
      	
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://physiotherapy-web-app.herokuapp.com/index.php">
                  <span data-feather="file"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://physiotherapy-web-app.herokuapp.com/physio_app_users.php">
                  <span data-feather="shopping-cart"></span>
                  Users (admin. only)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://physiotherapy-web-app.herokuapp.com/physio_app_exercises.php">
                  <span data-feather="users"></span>
                  Exercises
                </a>
              </li>
              
            </ul>

            
          </div>
        </nav>
        
        
        
		
		<div class="col">		
		
			<div class="row">
				<br><br><br><br>
			</div>		
		
			<div class="row">
				
				<div class="col sm-10">
					<?php //echo $user_table; ?>
				</div>
				
        	</div>
        	
        	<div class="row">
				<br><br><br><br>
			</div>	
        	
        </div>
        
        
        
      </div>
    </div>
		
		
		
		
		
 </body>
	
</html>

















