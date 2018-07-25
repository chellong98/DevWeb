<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script> -->
 	<script type="text/script" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://www.daterangepicker.com/moment.min.js"></script>
    <script src="http://www.daterangepicker.com/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/daterangepicker.css" />
    <script rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/website.js"> </script>
    <link rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/website.css">
	
</head>

<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto ">
				<?php if(isset($error_messenger)) {
				?>
					<ol class="breadcrumb alert-warning mt-5 ">
							<?php if (!empty($error_messenger)) echo $error_messenger?>
					</ol>	
				<?php } ?>
				<?php if(isset($success_messenger)) {
				?>
					<ol class="breadcrumb alert-success mt-5 ">
							<?php if (!empty($success_messenger)) echo $success_messenger?>
					</ol>	
				<?php } ?>
				<div class="card card-block move mt-5">
					<div class="card-header" align="center">
						<img src="https://bootsnipp.com/img/logo.jpg" width="10%" height="10%" style = "border-radius: 200px">
					</div>
				<div class="card-body ">
					<form action="<?php echo base_url()?>index.php/first_controller/addUsers_controller" method="POST" role="form" enctype="multipart/form-data">
						<legend>Register Users</legend>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>First Name</label>
									<input name="firstname" placeholder="Enter Fist Name" type="text" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']?>">
								</div>	
								<div class="col-sm-6">
									<label>Last Name</label>
									<input name="lastname" placeholder="Enter Last Name" type="text" class="form-control" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']?>">
								</div>		
							</div>
							<div class="row mt-2">
								<div class="col-sm-12">
									<label>Email</label>
									<input name="email" placeholder="Enter Email" type="text" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-6">
									<label>Password</label>
									<input name="password" placeholder="Password" type="password" class="form-control" value="<?php if(isset($_POST['password'])) echo $_POST['password']?>">
								</div>
								<div class="col-sm-6">
									<label>Confirm Password</label>
									<input name="confirmpassword" placeholder="Confirm Password" type="password" class="form-control" value="<?php if(isset($_POST['comfirmpassword'])) echo $_POST['comfirmpassword']?>">
								</div>	
							</div>
							<div class="row mt-2"> 
								<div class="col-sm-6">
									<label>Date of birth</label>
									<input type="text" name="birthdate" value="<?php if(isset($_POST['birthdate'])) echo $_POST['birthdate']?>" class="form-control" />
								</div>
								<div class="col-sm-6">
									<label>Gender</label>
										<div class="radio-inline">
										   
									    	<input value="Male" type="radio" name="sex"> 
									    	<label for="sex">Male </label>
									   
									    	<input  type="radio" name="sex" value="Female"> 


									     	 <label for="sex">Female</label> 
										
									    </div>	    
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-12">
									<label>Link Facebook</label>
									<input name="linkfacebook" type="text" placeholder="facebook" class="form-control" value="<?php if(isset($_POST['linkfacebook'])) echo $_POST['linkfacebook']?>">
								</div>
							</div> 
							<div class="row mt-2">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											Upload Image 
										</div>
										<div class="card-body">
											  <div class="form-group">
											    
											    <input type="file" name="fileImage" class="form-control-file" id="exampleFormControlFile1">
											  </div>				 
										</div>
									</div>
								</div>
							</div> 
							<div class="row mt-2">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											Upload Image Cover
										</div>
										<div class="card-body">
											  <div class="form-group">
											    
											    <input type="file" name="fileImageCover" class="form-control-file" id="exampleFormControlFile2">
											  </div>
											
											 
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<input value="Register" name="register-user"  type="submit" class="btn btn-success btn-block">
					</form>
				</div>
				<div class="card-footer">
					
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/1.js"></script> 
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<!-- <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script> -->
 	<script type="text/script" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://www.daterangepicker.com/moment.min.js"></script>
    <script src="http://www.daterangepicker.com/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/daterangepicker.css" />
    <script rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/website.js"> </script>
    <link rel="stylesheet" type="text/css" href="http://www.daterangepicker.com/website.css">
	
</head>

<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto ">
				<?php if(isset($error_messenger)) {
				?>
					<ol class="breadcrumb alert-warning mt-5 ">
							<?php if (!empty($error_messenger)) echo $error_messenger?>
					</ol>	
				<?php } ?>
				<?php if(isset($success_messenger)) {
				?>
					<ol class="breadcrumb alert-success mt-5 ">
							<?php if (!empty($success_messenger)) echo $success_messenger?>
					</ol>	
				<?php } ?>
				<div class="card card-block move mt-5">
					<div class="card-header" align="center">
						<img src="https://bootsnipp.com/img/logo.jpg" width="10%" height="10%" style = "border-radius: 200px">
					</div>
				<div class="card-body ">
					<form action="<?php echo base_url()?>index.php/first_controller/addUsers_controller" method="POST" role="form" enctype="multipart/form-data">
						<legend>Register Users</legend>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>First Name</label>
									<input name="firstname" placeholder="Enter Fist Name" type="text" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']?>">
								</div>	
								<div class="col-sm-6">
									<label>Last Name</label>
									<input name="lastname" placeholder="Enter Last Name" type="text" class="form-control" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']?>">
								</div>		
							</div>
							<div class="row mt-2">
								<div class="col-sm-12">
									<label>Email</label>
									<input name="email" placeholder="Enter Email" type="text" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-6">
									<label>Password</label>
									<input name="password" placeholder="Password" type="password" class="form-control" value="<?php if(isset($_POST['password'])) echo $_POST['password']?>">
								</div>
								<div class="col-sm-6">
									<label>Confirm Password</label>
									<input name="confirmpassword" placeholder="Confirm Password" type="password" class="form-control" value="<?php if(isset($_POST['comfirmpassword'])) echo $_POST['comfirmpassword']?>">
								</div>	
							</div>
							<div class="row mt-2"> 
								<div class="col-sm-6">
									<label>Date of birth</label>
									<input type="text" name="birthdate" value="<?php if(isset($_POST['birthdate'])) echo $_POST['birthdate']?>" class="form-control" />
								</div>
								<div class="col-sm-6">
									<label>Gender</label>
										<div class="radio-inline">
										   
									    	<input value="Male" type="radio" name="sex"> 
									    	<label for="sex">Male </label>
									   
									    	<input  type="radio" name="sex" value="Female"> 


									     	 <label for="sex">Female</label> 
										
									    </div>	    
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-sm-12">
									<label>Link Facebook</label>
									<input name="linkfacebook" type="text" placeholder="facebook" class="form-control" value="<?php if(isset($_POST['linkfacebook'])) echo $_POST['linkfacebook']?>">
								</div>
							</div> 
							<div class="row mt-2">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											Upload Image 
										</div>
										<div class="card-body">
											  <div class="form-group">
											    
											    <input type="file" name="fileImage" class="form-control-file" id="exampleFormControlFile1">
											  </div>				 
										</div>
									</div>
								</div>
							</div> 
							<div class="row mt-2">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											Upload Image Cover
										</div>
										<div class="card-body">
											  <div class="form-group">
											    
											    <input type="file" name="fileImageCover" class="form-control-file" id="exampleFormControlFile2">
											  </div>
											
											 
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<input value="Register" name="register-user"  type="submit" class="btn btn-success btn-block">
					</form>
				</div>
				<div class="card-footer">
					
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/1.js"></script> 
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
