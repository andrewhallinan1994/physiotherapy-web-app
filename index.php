<?php
	
	$login_username = $_REQUEST['login_username'];
	$login_password = $_REQUEST['login_password'];
	
	
	$input_fields = '';
	
	//$account_type = $session();			//something like this used to determine the user from the browser session
	$account_type = 'admin';					//$account_type = 'admin';
	
	if($account_type == 'admin'){
		
		$view_users_link = '<a class="nav-link" href="/physio_app_users.php">';
		
	} else {
		
		$view_users_link = '';
		
	}
	
	
?>



<html>
	
 <head>
		
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
		<style>
			
			.centre_image {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}
			
			.centre_text {
				text-align: center;
			}
			
			
			/* BASIC */
			
			html {
			  background-color: #56baed;
			}
			
			body {
			  font-family: "Poppins", sans-serif;
			  height: 100vh;
			}
			
			a {
			  color: #92badd;
			  display:inline-block;
			  text-decoration: none;
			  font-weight: 400;
			}
			
			h2 {
			  text-align: center;
			  font-size: 16px;
			  font-weight: 600;
			  text-transform: uppercase;
			  display:inline-block;
			  margin: 40px 8px 10px 8px; 
			  color: #cccccc;
			}
			
			
			
			/* STRUCTURE */
			
			.wrapper {
			  display: flex;
			  align-items: center;
			  flex-direction: column; 
			  justify-content: center;
			  width: 100%;
			  min-height: 100%;
			  padding: 20px;
			}
			
			#formContent {
			  -webkit-border-radius: 10px 10px 10px 10px;
			  border-radius: 10px 10px 10px 10px;
			  background: #fff;
			  padding: 30px;
			  width: 90%;
			  max-width: 450px;
			  position: relative;
			  padding: 0px;
			  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
			  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
			  text-align: center;
			}
			
			#formFooter {
			  background-color: #f6f6f6;
			  border-top: 1px solid #dce8f1;
			  padding: 25px;
			  text-align: center;
			  -webkit-border-radius: 0 0 10px 10px;
			  border-radius: 0 0 10px 10px;
			}
			
			
			
			/* TABS */
			
			h2.inactive {
			  color: #cccccc;
			}
			
			h2.active {
			  color: #0d0d0d;
			  border-bottom: 2px solid #5fbae9;
			}
			
			
			
			/* FORM TYPOGRAPHY*/
			
			input[type=button], input[type=submit], input[type=reset]  {
			  background-color: #56baed;
			  border: none;
			  color: white;
			  padding: 15px 80px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  text-transform: uppercase;
			  font-size: 13px;
			  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
			  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
			  -webkit-border-radius: 5px 5px 5px 5px;
			  border-radius: 5px 5px 5px 5px;
			  margin: 5px 20px 40px 20px;
			  -webkit-transition: all 0.3s ease-in-out;
			  -moz-transition: all 0.3s ease-in-out;
			  -ms-transition: all 0.3s ease-in-out;
			  -o-transition: all 0.3s ease-in-out;
			  transition: all 0.3s ease-in-out;
			}
			
			input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
			  background-color: #39ace7;
			}
			
			input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
			  -moz-transform: scale(0.95);
			  -webkit-transform: scale(0.95);
			  -o-transform: scale(0.95);
			  -ms-transform: scale(0.95);
			  transform: scale(0.95);
			}
			
			button {
			  background-color: #f6f6f6;
			  border: none;
			  color: #0d0d0d;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 5px;
			  width: 85%;
			  border: 2px solid #f6f6f6;
			  -webkit-transition: all 0.5s ease-in-out;
			  -moz-transition: all 0.5s ease-in-out;
			  -ms-transition: all 0.5s ease-in-out;
			  -o-transition: all 0.5s ease-in-out;
			  transition: all 0.5s ease-in-out;
			  -webkit-border-radius: 5px 5px 5px 5px;
			  border-radius: 5px 5px 5px 5px;
			}
			
			
			input[type=text] {
			  background-color: #f6f6f6;
			  border: none;
			  color: #0d0d0d;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 5px;
			  width: 85%;
			  border: 2px solid #f6f6f6;
			  -webkit-transition: all 0.5s ease-in-out;
			  -moz-transition: all 0.5s ease-in-out;
			  -ms-transition: all 0.5s ease-in-out;
			  -o-transition: all 0.5s ease-in-out;
			  transition: all 0.5s ease-in-out;
			  -webkit-border-radius: 5px 5px 5px 5px;
			  border-radius: 5px 5px 5px 5px;
			}
			
			input[type=password] {
			  background-color: #f6f6f6;
			  border: none;
			  color: #0d0d0d;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 5px;
			  width: 85%;
			  border: 2px solid #f6f6f6;
			  -webkit-transition: all 0.5s ease-in-out;
			  -moz-transition: all 0.5s ease-in-out;
			  -ms-transition: all 0.5s ease-in-out;
			  -o-transition: all 0.5s ease-in-out;
			  transition: all 0.5s ease-in-out;
			  -webkit-border-radius: 5px 5px 5px 5px;
			  border-radius: 5px 5px 5px 5px;
			}
			
			select {
			  background-color: #f6f6f6;
			  border: none;
			  color: #0d0d0d;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 5px;
			  width: 85%;
			  border: 2px solid #f6f6f6;
			  -webkit-transition: all 0.5s ease-in-out;
			  -moz-transition: all 0.5s ease-in-out;
			  -ms-transition: all 0.5s ease-in-out;
			  -o-transition: all 0.5s ease-in-out;
			  transition: all 0.5s ease-in-out;
			  -webkit-border-radius: 5px 5px 5px 5px;
			  border-radius: 5px 5px 5px 5px;
			}
			
			input[type=text]:focus {
			  background-color: #fff;
			  border-bottom: 2px solid #5fbae9;
			}
			
			input[type=text]:placeholder {
			  color: #cccccc;
			}
			
			
			
			/* OTHERS */
			
			*:focus {
			    outline: none;
			} 
			
			#icon {
			  width:60%;
			}
			
		</style>
		
 </head>
	
	
 <body>
		
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      
      <div class="col sm-4">
      </div>
      
      
      <div class="navbar-brand col-sm-4 text-center" href="#">
      	Physiotherapy web app
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
                <a class="nav-link" href="/index.php">
                  <span data-feather="file"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <?php echo $view_users_link ?>
                  <span data-feather="shopping-cart"></span>
                  Users (admin. only)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/physio_app_exercises.php">
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
				
	        	<div class="col-sm-10">
					<img src="https://i.pinimg.com/originals/68/e4/c1/68e4c168e315526d1251693acfa988e9.jpg" height="300" class="centre_image">
				</div>
				
        	</div>
        	<br><br>
        	
        	<div class="row">
				
				<div class="col-sm-4">
				</div>
				
	        	<div class="col-sm-8">
					<input type="submit" multiple class="select2" data-toggle="modal" data-target="#loginModal" value="Log In">
				</div>
				
				<div class="col-sm-4">
				</div>
				
        	</div>
        	
        	
        	<div class="row">
				
				<div class="col-sm-4">
				</div>
				
	        	<div class="col-sm-8">
					<!-- <input type="submit" multiple class="select2" data-toggle="modal" data-target="#signUpModal" value="Sign up">	-->
					<input type="submit" multiple class="select2" onClick="add_new_user()" value="Sign up">
				</div>
				
				<div class="col-sm-4">
				</div>
				
        	</div>
        	
        	<div class="row">
				<br>
			</div>	
        	
        </div>
        
        
        
      </div>
    </div>
    
    
    	
    	
    	<!-- Modal -->
					 <div class="modal fade" id="loginModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					      	
					        
					        <div class="modal-body">
					          
					          <div class="container">
			  					
									  <div class="row">
									  	
									    <div class="wrapper">
										  <div id="formContent">
										    <!-- Tabs Titles -->
										
										    <br>
											
										    <!-- Login Form -->
										    <form action="/physio_app_login_check.php">
										      <input type="text" id="login_username" multiple class="select2" name="login_username" placeholder="username"> 
										      <input type="password" id="login_password" multiple class="select2" name="login_password" placeholder="password">
										      <input type="submit" multiple class="select2" value="Log In">
										    </form>
											
										  </div>
										</div>
									    
									  </div>
								
			
							  </div>
					          
					          
					        </div>
					        
					      </div>
					      
					    </div>
					 </div>
					  
			<!-- Modal End -->
    
		
		
 </body>
	
</html>



<script>
	
	function add_new_user(){
		
		window.open('physio_app_add_new_user.php', '_self');
		
	}
	
</script>


