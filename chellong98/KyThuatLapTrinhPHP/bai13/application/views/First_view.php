<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register view</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	
</head>
<style>
	h1 {
		font-family: "segoe ui light";
		/*margin: auto;*/
		text-align: center;
		padding-top: 20px;
	}
</style>
<script>
	function Reset () {
		
		document.getElementById("register").reset();
		// alert(name +"\n" +adress+ "\n"+ job+ "\n"+ note);
		
	}
	function checkInfo() {
		var name = document.getElementById("name").value;
		var adress = document.getElementById("adress").value;
		var job = document.getElementById("job").value;
		var note = document.getElementById("note").value;
		// alert(name +"\n" +adress+ "\n"+ job+ "\n"+ note);
		if(name=="" || adress=="" || job=="" || note=="") {
			alert("empty field");
		}
	}
</script>
<body>
	<div class="page-header">
	  <h1>Register Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<div class="card">
					<div class="card-block">
						<form action="<?php echo base_url()?>index.php/first_controller/displayData" method="POST" role="form" id="register">
			
							<div class="form-group">
								<label for="">Name</label>
								<?php  

									function  echo_old($key,$olddata){

										if ($olddata==null || !isset($olddata[$key]) || is_null($olddata[$key])) return;
										else
										echo $olddata[$key];
									}
								?>
								<input  value= "<?php echo_old("name",$olddata) ?>" name="name" type="text" class="form-control" id="name" placeholder="Example: long">
							</div>
							<div class="form-group">
								<label for="">Adress</label>
								<input value= "<?php echo_old("adress",$olddata) ?>" name="adress" type="text" class="form-control" id="adress" placeholder="Example: hoc vien ACT">
							</div>
							<div class="form-group">
								<label for="">Occupation</label>
								<input value= "<?php echo_old("job",$olddata) ?>" name="job" type="text" class="form-control" id="job" placeholder="Example: dev">
							</div>
							<div class="form-group">
								<label for="">Note</label>
								<textarea value= "<?php echo_old("note",$olddata) ?>" name="note" id="note" class="form-control" rows="3" required="required">					
								</textarea>
			
							</div>
							
							<button type="button" onclick="Reset()" class="btn btn-danger col-sm-4 push-sm-2">Delete</button>
							<button type="submit" onclick="checkInfo()" class="btn btn-success col-sm-4 push-sm-2">Register</button>
						</form>
					</div>
				</div>
				
			</div>

		</div>
	</div>
	
</html>