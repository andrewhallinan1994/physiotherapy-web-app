<?php
	
	//$sign_up_username = $_REQUEST['sign_up_username'];
	
	$input_fields = '';
	$sign_up_button ='';
	
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
                <a class="nav-link" href="/physio_app_users.php">
                  <span data-feather="shopping-cart"></span>
                  Users (admin. only)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="physio_app_exercises.php">
                  <span data-feather="users"></span>
                  Exercises
                </a>
              </li>
              
            </ul>

            
          </div>
        </nav>
        
        
        
		
		<div class="col">			
			
			<br><br><br>
			<div class="card card_center border-primary mb-3" style="height:100%">
		
				<div class="card-body text-primary">
			    
			     <div class="row">
					<div class="col-sm-6" style="width:100%">
			          	Select app type: <br>
			          	<select id="app_category" class="select2" style="width: 100%;height: 60px;" onclick="get_inputs_by_content()" >
			          		<option  value= " ">Select account type </option>
			          		<option  value= "Free">Free</option>
			          		<option  value= "Premium (start free trial) ">Premium (start free trial) </option>
			          		
			          	</select> 
			          	<br>
		          	</div>
		          	
		          	<div class="col-sm-6" style="width:100%">
		          		
		          		<p> Sign up (enter a unique username): </p>
			          	<input type="text" id="sign_up_username" name="user_name_sign_up" class="form-control" style="width: 100%;" onkeyup="check_if_username_signup_is_already_taken()" >			<!-- onkeyup="check_if_username_signup_is_already_taken()"  -->					
				        
		          	</div>
		          	
		         </div>
		         
		         
		         <div class="row">
					<div class="col-sm-6" style="width:100%">
			          	
		          	</div>
		          	<div class="col-sm-6" style="width:100%">
			          	Password: <br>
			          	<input type="text" class="form-control" id="password" > 
			          	<br>
		          	</div>
			      </div>
		         
		         
			      
			      <div class="row">
					<div class="col-sm-6" style="width:100%">
			          	Age: <br>
			          	<input type="number" class="form-control" id="age" > 
			          	<br>
		          	</div>
		          	<div class="col-sm-6" style="width:100%">
			          	<select id="gender" class="select2" style="width: 100%;height: 60px;">
		          		<option  value="Select gender">Select gender</option>
		          		<option  value="Male">Male</option>
		          		<option  value="Female">Female</option>
		          		<option  value="Other">Other </option>
		          		
		          	</select>
		          	<br>
		          	</div>
			      </div>
			      
			      
			      
			      
			      <div class="row">
					<div class="col-sm-6" style="width:100%">
			          	Height (cm): <br>
			          	<input type="number" class="form-control" id="height" > 
			          	<br>
		          	</div>
		          	<div class="col-sm-6" style="width:100%">
			          	Weight (kg): <br>
			          	<input type="number" class="form-control" id="weight" > 
			          	<br>
		          	</div>
			      </div>
			      
			      
			     
			   </div>
		  </div>
		      
		      
		      
		    
		    <div id = "variable_input_fields">
				<?php echo $input_fields; ?>
			</div>
		      
	        
		      
		      
		      
		  <div class="card card_center border-primary mb-3" style="height:100%">
	
			<div class="card-body text-primary"> 
		      
	          
	          <div class="row">
	          	<div class="col-sm-2" style="width:100%">
	          	</div>
	          	
	          	<!-- 
	          	<div class="col-sm-8" style="width:100%">
					<button type="button" class="btn btn-primary" onclick="save_new_user();"  style="width:100%;">Add user</button>
					<?php echo $sign_up_button ?>
				</div>		-->
				<div class="col-sm-8">
		          	<div id = "sign_up_button_div">
		      		</div>
		      	</div>
		        
				
				<div class="col-sm-2" style="width:100%">
				</div>
		  	  </div>
		  	  
		  	  <br>
		  	  
		  	  <div class="row">
	          	<div class="col-sm-2" style="width:100%">
	          	</div>
	          	
	          	<div class="col-sm-8" style="width:100%">
					<button type="button" class="btn btn-danger" onclick="cancel_adding_user();"  style="width:100%;">Cancel</button>
				</div>
				
				<div class="col-sm-2" style="width:100%">
				</div>
		  	  </div>
		  	  
		    </div>
		   </div>


			
        	
        </div>
        
        
        
      </div>
    </div>
    
		
 </body>
	
</html>



<script>
	
	function check_if_username_signup_is_already_taken() {
		
		//console.log("TEST check_if_username_signup_is_already_taken() method has been triggered ");
		
		var sign_up_username = $("#sign_up_username").val();		//uses jQuery .val()
		console.log("Username entered: " + sign_up_username);
		
		var moddata = '#sign_up_button_div';
		
		var checking=$.post("physio_app_check_username_already_taken.php",{ sign_up_username: ""+sign_up_username+"" }, function(data){
			
			if(data.length >0) {
				$(moddata).html('');
				$(moddata).html(data);
				//console.log(data);
			} else {
				
			}
		});
		
	}
	
</script>


<script>
	
	function get_inputs_by_content() {
		//this method is not currently used
		
		var app_category = $("#app_category").val();
		console.log("Here is the app category selected: " +app_category);
		
		//var moddata = '#variable_input_fields';
			
		/*
		var checking=$.post("add_variable_input_fields.php",{ app_category: ""+app_category+"" }, function(data){
			
			if(data.length >0) {
			
				$(moddata).html('');
				$(moddata).html(data);
			
			} else {
				
			}
		});		*/
		
	}		
	
</script>


<script>
	
	function save_new_user(){
		
		var app_category = $('#app_category').val();
		var sign_up_username = $('#sign_up_username').val();
		var password = $('#password').val();
		var age = $('#age').val();
		var gender = $('#gender').val();
		var height = $('#height').val();
		var weight = $('#weight').val();
		
		//console.log("Here is the username entered: " +sign_up_username);
		
		var checking=$.post("physio_app_save_new_user.php",{ app_category: ""+app_category+"", sign_up_username: ""+sign_up_username+"", password: ""+password+"", age: ""+age+"", gender: ""+gender+"", height: ""+height+"", weight: ""+weight+"" }, function(data){		
			
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

	
<script>
	
	function cancel_adding_user(){
		
		window.open('index.php', '_self');
		
	}
	
	
</script>		
		

