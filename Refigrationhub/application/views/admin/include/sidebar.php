<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$data['value'] = $this->session->userdata('logindetails');
$name = $data['value']['name'];
$username = $data['value']['username'];
$user_type = $data['value']['user_type'];
$mobile = $data['value']['mobile'];
$privilege = $data['value']['privilege'];

//print_r($privilege); die;
$access = "";
if ($privilege != NULL) {
    $access = explode(',', $privilege);

}
?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url(); ?>" target="_blank;" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <?php
        if (!empty($user_type)) {
            if ($user_type == 1) {
                $usertype = 'Adminstration';
            } else if ($user_type == 2) {
                $usertype = 'Admin';

            }
        }
        ?>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class=""></i>
                    <span class="badge-warning">Setting</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="<?php echo base_url(); ?>backend/dist/img/user1-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Admin

                                </h3>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url(); ?>admin/Profile" class="dropdown-item dropdown-footer">Profile
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url(); ?>admin/Dashboard/logout"
                                   class="dropdown-item dropdown-footer">Sign Out</a>

                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>


                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url(); ?>admin/dashboard" class="brand-link">
            <img src="<?php echo base_url(); ?>backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Flawless India Pvt Ltd</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url(); ?>backend/dist/img/user2-160x160.jpg"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo base_url(); ?>admin/Profile" class="d-block"><?php echo $usertype; ?></a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Dashboard
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                User
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/User" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/User/listUser" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List User</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <?php if (in_array(1, $access)) { ?>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    Lead
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>admin/Lead" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>General Lead</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>Lead List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    <?php } ?>

                    <!-----------------Manage Type------------------->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                Ownership Type
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/OwnershipType" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Ownership Type </p>
                                </a>
                                <!--   <a href="<?php /*echo base_url(); */ ?>admin/Country/listCountry" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Ownership Type</p>
                                </a>-->
                            </li>
                        </ul>
                    </li>
                    <!-------OwnerShip Type----end-------->
                    <!-------Quanity Unit-------->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                               Quantity Unit
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/QuantityUnit" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Quantity Unit</p>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <!-------Quanity Unit-------->


                    <!------Mode of Payment------>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Mode of Payment
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/ModePayment" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Mode of Payment </p>
                                </a>
                                <!--<a href="<?php /*echo base_url(); */ ?>admin/Country/listCountry" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Mode of Payment</p>
                                </a>-->
                            </li>
                        </ul>
                    </li>
                    <!------Mode of Payment------>
                    <!-----------------Manage Type End Here------------------->
                    <!-----------------Manage Frequency------------------------>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                Frequency
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Frequency" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Frequency </p>
                                </a>
                                <!--<a href="<?php echo base_url(); ?>admin/Country/listCountry" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Frequency</p>
                                </a>-->
                            </li>
                        </ul>
                    </li>

                    <!-----------------Manage Frequency Here------------------->

                    <!-----------------Manage Primary Bussiness------------------------>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                Primary Business
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/PrimaryBussinessType" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Primary Business </p>
                                </a>

                            </li>
                        </ul>
                    </li>

                    <!-----------------Manage Primary Business end Here------------------->

                    <!-----------------Master  Bushiness Keyword------------------------>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                              Master Keyword
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/MasterKeyword" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add  Keyword</p>
                                </a>

                            </li>
                        </ul>
                    </li>

                    <!-----------------Master  Bushiness Keyword ------End Here ------------->

                    <!-----------------Manage Seller------------------->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p>
                                Buyer/Seller
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Buyer/BuyerList" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Buyer </p>
                                </a>
                                <a href="<?php echo base_url(); ?>admin/Seller/listSeller" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Seller </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!----------Manage Country-------------------------->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Country
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Country" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Country </p>
                                </a>
                                <a href="<?php echo base_url(); ?>admin/Country/listCountry" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Country </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Country/State" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add State</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Country/listState" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List State</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Country/City" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add City </p>
                                </a>
                                <a href="<?php echo base_url(); ?>admin/Country/listCity" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List City </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!--/*************Country End Here**************/-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                Tables
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Data Tables</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!------------------- Product Section Start Here--------------------->
                    <li class="nav-header">Product Information</li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-envelope-o"></i>
                            <p>
                                Category
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Category" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Category/listCategory" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Category</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-envelope-o"></i>
                            <p>
                                Sub-Category
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/SubCategory" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Sub-Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/SubCategory/listSubCategory" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Sub-Category</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <!--  /******************************/-->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                                Product
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Product" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/Product/listProduct" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Product</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!------------------- Product Section End Here--------------------->
                    <!-------Setting Controller--------->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus-square-o"></i>
                            <p>
                                Extras Setting
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url();?>admin/Setting/Banner" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url();?>admin/Setting/listBanner" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>List Banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url();?>admin/Setting" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Change Logo</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="starter.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-------Setting Controller--------->


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus-square-o"></i>
                            <p>
                                Extras
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/examples/404.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/500.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/examples/blank.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="starter.html" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">Setting</li>
                    <li class="nav-item">
                       <!-- <a href="https://adminlte.io/docs" class="nav-link">-->
                       <a href="<?php echo base_url(); ?>Setting" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p></p>
                        </a>
                    </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-danger"></i>
                            <p class="text">Important</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-warning"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-circle-o text-info"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Refrigeration-Hub</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>