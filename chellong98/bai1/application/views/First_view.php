<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">
	<style type="text/css">
		h3 {
			
			font-family: "segoe ui light";
			border-bottom: 1px solid grey;
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php require('header_sim.php');?>
	<h3 class="text-xs-center" align="center">thêm số điện thoại vào form sau</h3>
	<!-- <ul>
		<?php foreach ($danhsachsodienthoai as $key): ?>
			<li><?= $key ?></li>
		<?php endforeach ?>
	</ul> -->
	
	<div class="container" >
		<div class="row" style="margin-left : 20%; align-items: center;">
			<div class="col-sm-8 ">
				<div class="card">
					<div class="card-block">
						<form action="First_controller/insertData_controller" method="POST" role="form">
						
							<div class="form-group">
								<label for="">số sim</label>
								<input name="num" type="text" class="form-control" id="" placeholder="ví dụ: 12235254">
							</div>
							
							<div class="form-group">
								<label for="">giá sim</label>
								<input name="cost" type="text" class="form-control" id="" placeholder="ví dụ: 123">
							</div>
							
							<input type="submit" class="btn btn-success btn-block" value="Send">
						</form>

						<form action="" method="POST" class="form-horizontal" role="form">
						
							
						</form>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>
</body>
</html>