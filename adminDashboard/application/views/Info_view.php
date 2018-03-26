<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view 1</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/1.css">

</head>
<style>
  

</style>
<body class="fixed-nav sticky-footer" id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Repositories of Cuccut123</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" datatoggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url(); ?>/index.php/first_controller/index">
            <i class="fa fa-fw fa-home"></i>
            Home 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item" datatoggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Tài liệu lưu trữ </span>
          </a>
        </li>
         <li class="nav-item" datatoggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-table"></i> 
            <span class="nav-link-text">Danh sách thành viên</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components" data-parent="#exampleAccordion">
          <a href="#" class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Trạng thái của bạn</span>
          </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
              <a href="#">Navbar</a>
              </li>
              <li>
              <a href="#">Cards</a>
              </li>
            </ul>
         </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a href="#" class="nav-link nav-link-collapse collapsed" data-tggle="collapse" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
              <a href="#">Login Page</a>
              </li>
              <li>
              <a href="#">Registrtion Page</a>
              </li>
              <li>
              <a href="#">Forgot Password Page</a>
              </li>
            </ul>
        </li>
        <li class="nav-item sidenavToggler" style="background-color: #212529">
          <a id="sidenavToggler" href="#" class="nav-link text-center">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-7 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              <i class="fa fa-search"></i>
              Search
          </button>
          </form>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>/index.php/First_controller/loadLogin" class="nav-link">
            <i class="fa fa-fw fa-sign-out"></i>
            Login
          </a>
        </li>
      </ul>
    </div>
  </nav>
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