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
				<h1>Các sim và giá hiện có</h1>
			</div>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($dulieu as $key => $value): ?>
								
				<div class="col-sm-4">
					<div class="card card-deck">
						<div class="card-body">
							<h3 class="card-title">so sim: <?= $value['soDienThoai'] ?></h3>
			   				<p class="card-text">gia tien: <?= $value['giaTien']?></p>
			   				<p class="card-id">id: <?= $value['idSim']?></p>
			   				<a href="showData_controller/deleteData?delete=<?= $value['idSim']?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
			   				<a href="showData_controller/editsim/<?= $value['idSim']?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						</div>
					</div>
				</div>

			<?php endforeach ?>
		</div>
	</div>
</body>
</html>