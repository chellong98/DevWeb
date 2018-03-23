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
	function Reset () {
		
		
		document.getElementById("register").reset();
		// alert(name +"\n" +adress+ "\n"+ job+ "\n"+ note);
		
	}
</script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form  method="POST" role="form" id="register">
					<legend>Form vẽ bảng</legend>
					<div class="form-group" >
						<label for="">Số dòng</label>
						<input type="text" name="sodong" class="form-control" id="" placeholder="Input row">
						<label for="">Số cột</label>
						<input type="text" name="socot" class="form-control" id="" placeholder="Input column">
					</div>
					<button name="btnReset" type="button" onclick="Reset()" class="btn btn-danger" >Nhập lại</button>
					<input type="submit" id="btnDelete"  name="btnPaint" value="Vẽ bảng" class="btn btn-success" />
			</div>
		</div>
	</div>
		<?php
			if (isset($_POST["btnPaint"])){
  // "Save Changes" clicked
				$sodong = $_POST['sodong'];
				$socot = $_POST['socot'];
				echo '<br>';
				echo '<table class="table table-hover table-bordered">';
				echo '<label></label>';
				echo '<tbody>';
				for($i=0; $i<$sodong; $i++) {
					echo '<tr>';
						for($j=0; $j<$socot; $j++) {
							if(i<j) {
								echo '<td>';
								echo $j;
							echo '</td>';
							}
						}
					echo '</tr>';	
				}
				echo '<tbody>';
				echo '</table>';

				
			}
		?>
	</form>
</body>
</html>