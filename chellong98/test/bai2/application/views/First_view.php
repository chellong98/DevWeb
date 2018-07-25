<<<<<<< HEAD
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

<script type="text/javascript">
	function check() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username=="" || password=="") {
			alert('nhap username password');
		}
		
	}

</script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="" method="POST" role="form">
					<legend>Form dang nhap</legend>
				
					<div class="form-group">
						<label for="">Username</label>
						<input id="username" name="username" type="text" class="form-control" id="" placeholder="abc">
						<label for="">Password</label>
						<input id="password" name="password" type="password" class="form-control" id="" placeholder="">
					</div>
				
					<button type="submit" onclick="check()" name="login" class="btn btn-info">Login</button>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if($_POST)
	{
		$username = $_POST["username"];
		$password = $_POST['password'];
		echo $username;
		echo $password;
	}
=======
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

<script type="text/javascript">
	function check() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if(username=="" || password=="") {
			alert('nhap username password');
		}
		
	}

</script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="" method="POST" role="form">
					<legend>Form dang nhap</legend>
				
					<div class="form-group">
						<label for="">Username</label>
						<input id="username" name="username" type="text" class="form-control" id="" placeholder="abc">
						<label for="">Password</label>
						<input id="password" name="password" type="password" class="form-control" id="" placeholder="">
					</div>
				
					<button type="submit" onclick="check()" name="login" class="btn btn-info">Login</button>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if($_POST)
	{
		$username = $_POST["username"];
		$password = $_POST['password'];
		echo $username;
		echo $password;
	}
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
?>