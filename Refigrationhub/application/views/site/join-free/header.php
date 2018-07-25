<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8">
		<meta name="author" content="<?php echo $author;?>">
		<meta name="description" content="<?php echo $description;?>">
		<meta name="keywords" content="<?php echo $keywords;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>front_assets/images/logo.png">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/fontello.css">
        <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/js/layerslider/css/layerslider.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/js/colorpicker/colorpicker.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/style-1.css">
        <link rel="stylesheet" href="<?php echo base_url();?>front_assets/css/fastselect.min.css">
		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/oldie.css">
		<![endif]-->
	</head>
	<body class="front_page">
	
		<div class="wide_layout">
		<header id="main_navigation_wrap">
				<div class="top_part">
					<div class="container">
						<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="clearfix">
                    <div class="alignright ">
               <nav>
				
                <ul class="topbar">
				<li class="has_submenu"><a href="#">For Buyers</a>
				<ul class="theme_menu submenu">
				<li ><a href="<?php echo base_url('PostBuyRequirements');?>">Post Buy Requirements</a></li>
                <li ><a href="<?php echo base_url('SubscribeToSellTradeAlerts');?>">Subscribe To Sell Trade Alerts</a></li>
				<li ><a href="<?php echo base_url('SearchSupplier');?>">Search Suppliers</a></li>
				
				</ul>
				</li>
                    <li class="has_submenu"><a href="#">For Suppliers</a>
				<ul class="theme_menu submenu">
				<li ><a href="<?php echo base_url('DisplayNewProducts');?>">Display New Products</a></li>
                <li ><a href="<?php echo base_url('SearchBuyTradeLeads');?>">Search Buy Trade Leads</a></li>
				<li><a href="<?php echo base_url('SubscribeToBuyAlerts');?>">Subscribe To Buy Alerts</a></li>
								
				</ul>
				</li>
                     <li class="has_submenu"><a href="#">Help</a>
				<ul class="theme_menu submenu">
				<li ><a href="#">Call Us: +91 0000000000</a></li>
                <li ><a href="<?php echo base_url('Feedback');?>">Send Feedback</a></li>
				<li><a href="<?php echo base_url('Contact');?>">Contact Us</a></li>			
				</ul>
				</li>
                     <li class="has_submenu"><a href="#" style="color: #fe8d8d"><i class="icon-user"></i>Sign In &#124; Join Free</a>
				<ul class="theme_menu submenu">
                    <div class="login">
                     <a href="<?php echo base_url('Login');?>" class="button_blue middle_btn">Log in</a> 
                        <h4 class="text-center pd4">If you are a new user </h4> 
                        <h5 class="text-center">Register</h5>
                        <a href="<?php echo base_url('JoinFree');?>" class="button_grey middle_btn">Join Free</a>
                    </div>
				<li><a href="<?php echo base_url('user/Dashboard');?>">My Profile</a></li>
                <li class="animated_item"><a href="#">Change Password</a></li>
				<li class="animated_item"><a href="#">My Inquiries</a></li>
				</ul>
				</li>
				</ul>
                </nav>
                    </div>			

								</div>

							</div>

						</div>

					</div>

				</div>
				<hr>
				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-md-3">
									<a href="<?php echo base_url('Home');?>" class="logo">
										<img src="<?php echo base_url();?>front_assets/images/logo.png" alt="">
									</a>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<form class="clearfix search">
                                         <div class="fstElement fstSingleMode drp"> 
                                        <li> <i class="icon-location-4"></i></li>     
                <select class="singleSelectGrouped" name="language">  
                    
                <optgroup>
                    
                    <option value="Delhi">Delhi</option>
                    <option value="Noida">Noida</option>
                    <option value="Gurgaon">Gurgaon</option>
                    <option value="Faridabad">Faridabad</option>
                    <option value="Ghaziabad">Ghaziabad</option>
                    <option value="Agra">Agra</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Pune">Pune</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Allahabad">Allahabad</option>
                    <option value="Bhopal">Bhopal</option>
                </optgroup>                
            </select>
                    </div>
				<input type="text" name="" tabindex="1" placeholder="Find your service here" class="alignleft">
								<button class="button_blue">Get Started</button>
									</form>
								</div>
                                <div class="col-md-3">
                                <a href="<?php echo base_url('PostBuyRequirements');?>" class="button_blue middle_btn a1">Post Buy Requirement</a>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<div>

					
				</div>
			</header>