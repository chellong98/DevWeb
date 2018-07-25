<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show data</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
</head>
<body>
	<?php require('header_sim.php');?>
	<div class="container" align="center">
			<div class="text-xs-center">
				<h1>Sửa sô sim và giá tiền</h1>
			</div>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($dulieu as $key => $value): ?>
								
			<div class="col-sm-8 ">
					<div class="card">
						<div class="card-block">
							<form action="../updateDuLieu" method="POST" role="form">
								
									<input name="id"  type="hidden" class="form-control" id="" placeholder="ví dụ: 12235254" value="<?= $value['idSim']?>">
							

								<div class="form-group">
									<label for="">số sim</label>
									<input name="num" type="text" class="form-control" id="" placeholder="ví dụ: 12235254" value="<?= $value['soDienThoai']?>">
								</div>
								
								<div class="form-group">
									<label for="">giá sim</label>
									<input name="cost" type="text" class="form-control" id="" placeholder="ví dụ: 123" value="<?= $value['giaTien']?>">
								</div>
								
								<input type="submit" class="btn btn-success btn-block" value="Lưu">
							</form>

						</div>
					</div>
			</div>

			<?php endforeach ?>
		</div>
	</div>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show data</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
</head>
<body>
	<?php require('header_sim.php');?>
	<div class="container" align="center">
			<div class="text-xs-center">
				<h1>Sửa sô sim và giá tiền</h1>
			</div>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($dulieu as $key => $value): ?>
								
			<div class="col-sm-8 ">
					<div class="card">
						<div class="card-block">
							<form action="../updateDuLieu" method="POST" role="form">
								
									<input name="id"  type="hidden" class="form-control" id="" placeholder="ví dụ: 12235254" value="<?= $value['idSim']?>">
							

								<div class="form-group">
									<label for="">số sim</label>
									<input name="num" type="text" class="form-control" id="" placeholder="ví dụ: 12235254" value="<?= $value['soDienThoai']?>">
								</div>
								
								<div class="form-group">
									<label for="">giá sim</label>
									<input name="cost" type="text" class="form-control" id="" placeholder="ví dụ: 123" value="<?= $value['giaTien']?>">
								</div>
								
								<input type="submit" class="btn btn-success btn-block" value="Lưu">
							</form>

						</div>
					</div>
			</div>

			<?php endforeach ?>
		</div>
	</div>
</body>
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
</html>