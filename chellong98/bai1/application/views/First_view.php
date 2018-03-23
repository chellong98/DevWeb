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
	<style type="text/css">
		h3 {
			
			font-family: "segoe ui light";
			border-bottom: 1px solid grey;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h3 class="text-xs-center">thêm số điện thoại vào form sau</h3>
	<!-- <ul>
		<?php foreach ($danhsachsodienthoai as $key): ?>
			<li><?= $key ?></li>
		<?php endforeach ?>
	</ul> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
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

		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
							<th>tai khoan</th>
							<th>mat khau</th>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>chellong98</td>
							<td>longvip98</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<table class="table table-striped table-bordered ">
					<thead>
						<tr>
							<th>tai khoan</th>
							<th>mat khau</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>chellong98</td>
							<td>longvip98</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>