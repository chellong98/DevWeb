<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">



</head>
<style>
  

</style>
<body class="fixed-nav sticky-footer" id="page-top">
	<?php require('Header_view.php');?>
  <div class="content-wrapper" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10  ml-auto">
          <ol class="breadcrumb">
            <li class="breadcrump-item">
              <a href="#">Home </a>
            </li>
            <li class="breadcrumb-item active">
              / New feed
            </li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 ml-auto">
          <div class="card card-block">
          <div class="card-header">
            <i class="fa fa-area-chart"></i> Thong tin ca nhan
          </div>
          <div class="card-body ">
            <div class="card-deck card-block">
              <div class="card ">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>