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
<style type="text/css">
	h1 {
		text-align: center;
		font-family: segoe ui light;
		padding-top: 10px;
	}
</style>
<script type="text/javascript">
	function Reset () {
		
		
		document.getElementById("register").reset();
		// alert(name +"\n" +adress+ "\n"+ job+ "\n"+ note);
		
	}
</script>
<body>
	<div class="page-header">
	  <h1>Form Register</h1>
	  <hr/>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<div class="card">
					<div class="card-block">
						<form action="<?php echo base_url()?>index.php/first_controller/loadData" method="POST" role="form" id="register">
						
	
							<div class="form-group">
							<label for="">Ma Sinh Vien</label>
							<input type="text" name="maSinhVien" class=  "form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Ho Ten</label>
							<input type="text" name="hoTen" class="form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Ngay Sinh</label>
							<input type="text" name="ngaySinh" class="form-control" id="" placeholder="Input field">
							</div>	

							<div class="form-group">
								<label>gioi tinh:  </label>
								<div class="radio-inline">	
									<label>							
										<input name="gioiTinh" type="radio" value="nam"/>
										Nam
									</label>
									<label>
										<input name="gioiTinh" type="radio" value="nu"/>
										Nu
									</label>
								</div>
							</div>

							<div class="form-group">
							<label for="">Noi Sinh</label>
							<input type="text" name="noiSinh" class="form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Lop</label>
							<input type="text" name="lop" class="form-control" id="" placeholder="Input field">
							</div>	
							<button type="button"  onclick="Reset()" class="btn btn-danger">Nhap lai</button>
							<input type="submit"  class="btn btn-success" value="Dang ky">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
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
<style type="text/css">
	h1 {
		text-align: center;
		font-family: segoe ui light;
		padding-top: 10px;
	}
</style>
<script type="text/javascript">
	function Reset () {
		
		
		document.getElementById("register").reset();
		// alert(name +"\n" +adress+ "\n"+ job+ "\n"+ note);
		
	}
</script>
<body>
	<div class="page-header">
	  <h1>Form Register</h1>
	  <hr/>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<div class="card">
					<div class="card-block">
						<form action="<?php echo base_url()?>index.php/first_controller/loadData" method="POST" role="form" id="register">
						
	
							<div class="form-group">
							<label for="">Ma Sinh Vien</label>
							<input type="text" name="maSinhVien" class=  "form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Ho Ten</label>
							<input type="text" name="hoTen" class="form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Ngay Sinh</label>
							<input type="text" name="ngaySinh" class="form-control" id="" placeholder="Input field">
							</div>	

							<div class="form-group">
								<label>gioi tinh:  </label>
								<div class="radio-inline">	
									<label>							
										<input name="gioiTinh" type="radio" value="nam"/>
										Nam
									</label>
									<label>
										<input name="gioiTinh" type="radio" value="nu"/>
										Nu
									</label>
								</div>
							</div>

							<div class="form-group">
							<label for="">Noi Sinh</label>
							<input type="text" name="noiSinh" class="form-control" id="" placeholder="Input field">
							</div>	
							<div class="form-group">
							<label for="">Lop</label>
							<input type="text" name="lop" class="form-control" id="" placeholder="Input field">
							</div>	
							<button type="button"  onclick="Reset()" class="btn btn-danger">Nhap lai</button>
							<input type="submit"  class="btn btn-success" value="Dang ky">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
</html>