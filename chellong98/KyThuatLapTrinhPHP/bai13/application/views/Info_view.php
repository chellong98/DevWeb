<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>info view</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<style>
	h1 {
		font-family: "segoe ui light";
		text-align: center;
		padding-top: 20px;
	}
</style>
<body>
	<div class="container">
		<div class="page-header">
			<h1>Info User</h1>
			<hr>
		</div>

		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Adress</th>
							<th>Occupation</th>
							<th>Note</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php foreach ($infoUser as $value): ?>
								<td><?=$value?></td>
							<?php endforeach ?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>