<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
 	

</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 m-auto ">

				<div class="card card-login mt-5 move">
					<div class="card-header img-circle" align="center" >
						<img src="https://bootsnipp.com/img/logo.jpg" width="10%" height="10%" style = "border-radius: 200px">
					</div>
					<div class="card-body">
						<form action="" method="POST" role="form">
							<legend class="text-center">Dang Nhap</legend>
						
							<div class="form-group">
								<label >Email Adress</label>
								<input type="email" class="form-control" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label >Password</label>
								<input type="password" class="form-control"  placeholder="Enter Password">
							</div>
							<div class="form-group">
								<div class="form-check">	
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										Remember Password
									</label>
								</div>
							</div>
							
						
							<button type="submit" class="btn btn-success btn-block ">Login</button>
						</form>
					</div>
					<div class="card-footer text-center">
						<a href="<?php echo base_url(); ?>index.php/first_controller/loadRegisterUser" class="d-block small mt-1">Register Acount</a>
						<a href="#" class="d-block small">Forgot Password</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>vendor/1.js"></script>