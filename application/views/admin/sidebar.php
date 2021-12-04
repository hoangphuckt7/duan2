
        <!-- Sidebar Header    -->
        <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3"
                    src="<?php echo base_url()?>public/admin/img/user_img/logo.png" alt="person">
                <h2 class="h5 text-white text-uppercase mb-0"><?php echo $this->session->userdata('username')?></h2>
                <div class="d-flex align-items-center justify-content-between" style="color: #6e6868">
                    <i class="fa fa-circle text-success" style="font-size: 6px"></i>online
                </div>
            </div>
            <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center"
                href="index.html">
                <img class="rounded-circle avatar"
                    src="<?php echo base_url()?>public/admin/img/user_img/logo.png" alt="person">
            </a>
        </div>
        <!-- Sidebar Navigation Menus-->
        <!-- <span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span> -->
        <ul class="list-unstyled">
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#real-estate-1"> </use>
                    </svg>Home 
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#survey-1"> </use>
                    </svg>Quản Lý Nhân Viên 
                </a>
                <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                    <li><a class="sidebar-link" href="<?php echo admin_url('quanlyNV');?>">Kế Toán</a></li>
                    <li><a class="sidebar-link" href="<?php echo admin_url('quantrivien');?>">Quản Trị Viên</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo admin_url('quanlykhuvuc');?>">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#survey-1"> </use>
                    </svg>Quản Lý Khu Vực 
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo admin_url('quanlysanpham');?>">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#survey-1"> </use>
                    </svg>Quản Lý Sản Phẩm
                </a>
            </li>
            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#browser-window-1"> </use>
                    </svg>Example dropdown 
                </a>
                <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                    <li><a class="sidebar-link" href="#">Page</a></li>
                    <li><a class="sidebar-link" href="#">Page</a></li>
                    <li><a class="sidebar-link" href="#">Page</a></li>
                </ul>
            </li> -->
            <!-- <li class="sidebar-item"><a class="sidebar-link" href="login.html">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                        <use xlink:href="#disable-1"> </use>
                    </svg>Login page </a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="#!">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                        <use xlink:href="#imac-screen-1"> </use>
                    </svg>Demo
                    <div class="badge bg-warning">6 New</div>
                </a>
            </li> -->
        </ul>
        <!-- <span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Second menu</span> -->
        <!-- <ul class="list-unstyled py-4">
            <li class="sidebar-item"> 
                <a class="sidebar-link" href="#!">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                        <use xlink:href="#chart-1"> </use>
                    </svg>Demo
                </a>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link" href="">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                        <use xlink:href="#imac-screen-1"> </use>
                    </svg>Demo
                    <div class="badge bg-info">Special</div>
                </a>
            </li>
            <li class="sidebar-item"> 
                <a class="sidebar-link" href="">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                        <use xlink:href="#quality-1"> </use>
                    </svg>Demo
                </a>
            </li>
            <li class="sidebar-item"> 
                <a class="sidebar-link" href="">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy me-xl-2">
                        <use xlink:href="#security-shield-1"> </use>
                    </svg>Demo
                </a>
            </li>
        </ul> -->