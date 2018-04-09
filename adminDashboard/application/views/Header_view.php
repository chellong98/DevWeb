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
          <a class="nav-link" href="<?php echo base_url(); ?>/index.php/First_controller/loadInfo">
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
          <a id="sidenavToggler" href="#" class=" nav-link text-center mb-1">
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