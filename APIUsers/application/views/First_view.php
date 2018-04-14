<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	
</head>
<body>
	<form action="<?php base_url()?>/APIUsers/index.php/First_controller/accountController" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" name="json" id="" placeholder="Input field">
			<input type="text" class="form-control" name="password" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>