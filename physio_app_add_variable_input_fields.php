<?php
	
	$app_category = $_REQUEST['app_category'];
	
	$input_fields = ' ';
	
	
	if($app_category === 'Select user app type'){
		
		$input_fields = ' ';
		
	}
	
	if($app_category === 'Care management suite'){
		
		$input_fields = '
			<div class="card card_center border-primary mb-3" style="height:15%">
				<div class="card-body text-primary">
				
					<div class="row">
						<div class="col-sm-1" style="width:100%">
			          	</div>
						
						<div class="col-sm-4" style="width:100%">
				          	Care centre name: <br>
				          	<input type="text" class="form-control" id="care_centre_name" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-2" style="width:100%">
			          	</div>
			          	
			          	<div class="col-sm-4" style="width:100%">
				          	Care centre ID: <br>
				          	<input type="text" class="form-control" id="care_centre_id" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-1" style="width:100%">
			          	</div>
			          	
				     </div>
					
				</div>
			</div>	
			
		';
		
	}
	
	if($app_category === 'Nurse/carer app'){
		
		$input_fields = '
			<div class="card card_center border-primary mb-3" style="height:15%">
				<div class="card-body text-primary">
				
					<div class="row">
						<div class="col-sm-1" style="width:100%">
			          	</div>
						
						<div class="col-sm-4" style="width:100%">
				          	Nurse/carer user name: <br>
				          	<input type="text" class="form-control" id="asset_name" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-2" style="width:100%">
			          	</div>
			          	
			          	<div class="col-sm-4" style="width:100%">
				          	Nurse/carer user ID: <br>
				          	<input type="text" class="form-control" id="manufacturer" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-1" style="width:100%">
			          	</div>
			          	
				     </div>
					
				</div>
			</div>	
			
		';
		
	}
	
	if($app_category === 'Family app'){
		
		$input_fields = '
			<div class="card card_center border-primary mb-3" style="height:15%">
				<div class="card-body text-primary">
				
					<div class="row">
						<div class="col-sm-1" style="width:100%">
			          	</div>
						
						<div class="col-sm-4" style="width:100%">
				          	Family account name: <br>
				          	<input type="text" class="form-control" id="asset_name" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-2" style="width:100%">
			          	</div>
			          	
			          	<div class="col-sm-4" style="width:100%">
				          	Family account ID: <br>
				          	<input type="text" class="form-control" id="manufacturer" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-1" style="width:100%">
			          	</div>
			          	
				     </div>
					
				</div>
			</div>	
			
		';
		
	}
	
	if($app_category === 'Patient app'){
		
		$input_fields = '
			<div class="card card_center border-primary mb-3" style="height:15%">
				<div class="card-body text-primary">
				
					<div class="row">
						<div class="col-sm-1" style="width:100%">
			          	</div>
						
						<div class="col-sm-4" style="width:100%">
				          	Patient user name: <br>
				          	<input type="text" class="form-control" id="asset_name" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-2" style="width:100%">
			          	</div>
			          	
			          	<div class="col-sm-4" style="width:100%">
				          	Patient ID: <br>
				          	<input type="text" class="form-control" id="manufacturer" > 
				          	<br>
			          	</div>
			          	
			          	<div class="col-sm-1" style="width:100%">
			          	</div>
			          	
				     </div>
					
				</div>
			</div>	
			
		';
		
	}

		

	echo $input_fields;

?>



