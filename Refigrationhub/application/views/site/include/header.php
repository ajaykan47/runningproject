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
    <!--   <link rel="stylesheet/less" type="text/css" href="bootstrap/less/bootstrap.less">
  <script src="less.min.js" type="text/javascript"></script>
 -->
    <!--   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-ie6.css">-->

  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/ie.css">
  <![endif]-->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front_assets/css/oldie.css">
		<![endif]-->
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
									<a href="<?php echo base_url();?>" class="logo">
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

					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<nav class="full_width_nav main_navigation">
									<ul>
										<li class="has_megamenu">
											<a href="#">
                                                <span class="icon1">
                                                    <i> <img src="<?php echo base_url();?>front_assets/images/icon-1.png" alt=".."></i>
                                               Refrigeration<br> Parts
                                                    </span>
                                                    </a>
											<div class="mega_menu clearfix">
												<div class="mega_menu_item">

													<ul class="list_of_links">

														<li><a href="<?php echo base_url('Products');?>">COMPRESSORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">REFRIGERATION GASES</a></li>
														<li><a href="<?php echo base_url('Products');?>">COPPER PIPE</a></li>
														<li><a href="<?php echo base_url('Products');?>">INSULATIONS PIPE &amp; SHEETS</a></li>
														<li><a href="<?php echo base_url('Products');?>">MOTORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">FANS</a></li>
														<li><a href="<?php echo base_url('Products');?>">AXIAL FANS</a></li>
														<li><a href="<?php echo base_url('Products');?>">SPLIT INDOOR UNITS</a></li>
														<li><a href="<?php echo base_url('Products');?>">SPLIT OUTDOOR UNITS</a></li>

													</ul>

												</div>
												<div class="mega_menu_item">

													<ul class="list_of_links">

														<li><a href="<?php echo base_url('Products');?>">WALL AND FLOOR STAND</a></li>
														<li><a href="<?php echo base_url('Products');?>">CAPACITORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">COPPER FITTINGS</a></li>
														<li><a href="<?php echo base_url('Products');?>">CAPILLARY TUBE</a></li>
														<li><a href="<?php echo base_url('Products');?>">LPG CANS</a></li>
														<li><a href="<?php echo base_url('Products');?>">R 134 CANS</a></li>
														<li><a href="<?php echo base_url('Products');?>">HAND SHUT OFF VALUES</a></li>
														<li><a href="<?php echo base_url('Products');?>">LP HP PRESSURE SWITCH</a></li>

													</ul>

												</div>
                                                <div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/compresor.png" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">Product Name</a></p>
																</div>

															</div>
														</div>
                                                        <div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/capacitor.png" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">Product Name</a></p>
																</div>

															</div>
														</div>

                                                    </div>
                                                    <hr>
                                                </div>


											</div>
										</li>

										<li class="has_megamenu">
											<a href="#">
                                                <span class="icon1">
                                                <i> <img src="<?php echo base_url();?>front_assets/images/icon-8.png" alt=".."></i>
                                                     Industrial <br>Parts
                                                </span>
                                              </a>
											<div class="mega_menu type_2 clearfix">
												<div class="mega_menu_item">
													<ul class="list_of_links">
														<li><a href="<?php echo base_url('Products');?>">SCROLL COMPRESSORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">EXPANSION VALVES</a></li>
														<li><a href="<?php echo base_url('Products');?>">FILTER DRIERS</a></li>
														<li><a href="<?php echo base_url('Products');?>">TEMPERATURE CONTROLLERS</a></li>
														<li><a href="<?php echo base_url('Products');?>">BALL VALVES</a></li>
														<li><a href="<?php echo base_url('Products');?>">SOLENOIDE VALVE</a></li>
														<li><a href="<?php echo base_url('Products');?>">VIBRATION ELIMINATORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">SIGHT GLASS</a></li>

													</ul>

												</div>
                                                <div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-3">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/scrollcompressor.png" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">Product Name</a></p>
																</div>

															</div>
														</div>

														<div class="col-sm-3">
															<div class="product_item">
																<div class="image_wrap">
													<img src="<?php echo base_url();?>front_assets/images/expansionvalve.png" alt="">
                                                                </div>
																<div class="description">
								    <p><a href="#">Product Name</a></p>

																</div>

															</div>
														</div>
														<div class="col-sm-3">
															<div class="product_item">
																<div class="image_wrap">
												<img src="<?php echo base_url();?>front_assets/images/solenoidvalve.png" alt="">
													</div>
    								<div class="description">
								<p><a href="#">Product Name</a></p>
																</div>
															</div>
														</div>
													</div>
                                                    <hr>
												</div>
											</div>
										</li>

										<li class="has_megamenu">

											<a href="#">
                                                <span class="icon1">
                                                <i><img src="<?php echo base_url();?>front_assets/images/icon-9.png" alt=".."></i>
                                                     Refreigerator<br> Parts
                                                </span>
                                               </a>
											<div class="mega_menu type_3 clearfix">
												<div class="mega_menu_item">
													<ul class="list_of_links">
														<li><a href="<?php echo base_url('Products');?>">REFRIGERATOR COMPRESSOR</a></li>
														<li><a href="<?php echo base_url('Products');?>">THERMOSTATE</a></li>
														<li><a href="<?php echo base_url('Products');?>">FAN MOTORS</a></li>
														<li><a href="<?php echo base_url('Products');?>">BIO METALS</a></li>
														<li><a href="<?php echo base_url('Products');?>">FREEZERS</a></li>
														<li><a href="<?php echo base_url('Products');?>">FemiRELAY AND OVERLOADS</a></li>
                                                        <li><a href="<?php echo base_url('Products');?>">TIMERS</a></li>
													</ul>
												</div>
												<div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/primg.jpg" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">Thermostat</a></p>
																</div>

															</div>
														</div>

														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
													<img src="<?php echo base_url();?>front_assets/images/fanmotor.jpg" alt="">
                                                                </div>
																<div class="description">
								                                <p><a href="#">Fan Motor</a></p>

																</div>

															</div>
														</div>
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/freezers.jpg" alt="">
													</div>
    								<div class="description">

								<p><a href="#">Freezers</a></p>

																</div>

															</div>
														</div>
													</div>
                                                    <hr>
												</div>
											</div>
                                        </li>

										<li class="has_megamenu">

											<a href="#">
                                                <span class="icon1">
                                                <i><img src="<?php echo base_url();?>front_assets/images/icon-5.png" alt=".."></i>
                                                    Air<br> Conditioners
                                                </span>
                                                </a>

											<div class="mega_menu type_3 clearfix">
												<div class="mega_menu_item">
													<ul class="list_of_links">
												<li><a href="<?php echo base_url('Products');?>">SPLIT AIRCONDITIONERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">WINDOW AIR CONDITIONERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">INVERTER AIR CONDITIONERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">FLOOR STANDING AIR CONDITIONERS</a></li>
												</ul>
												</div>
												<div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/splitac.jpg" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">SPLIT AIRCONDITIONERS</a></p>
																</div>

															</div>
														</div>

														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
													<img src="<?php echo base_url();?>front_assets/images/windowac.jpg" alt="">
                                                                </div>
																<div class="description">
                                                                    <p><a href="#">WINDOW AIR CONDITIONERS</a></p>

																</div>

															</div>
														</div>
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/inverterac.jpg" alt="">
													               </div>
    								            <div class="description">

								                        <p><a href="#">INVERTER AIR CONDITIONERS</a></p>

																</div>

															</div>
														</div>
													</div>
                                                    <hr>
												</div>

											</div>
										</li>
										<li class="has_megamenu">
											<a href="#">
                                                <span class="icon1">
                                                <i> <img src="<?php echo base_url();?>front_assets/images/icon-7.png" alt=".."></i>
                                                     Commercial Air<br> Conditioners
                                                </span>
                                              </a>
	                                           <div class="mega_menu type_3 clearfix">
												<div class="mega_menu_item">
													<ul class="list_of_links">
												<li><a href="<?php echo base_url('Products');?>">DUCTEABLE AIR CONDITIONERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">VRV COOLING SYSTEMS</a></li>
												<li><a href="<?php echo base_url('Products');?>">HVAC COOLING SYSTEMS</a></li>
												<li><a href="<?php echo base_url('Products');?>">CENTRAL AIR CONDITIONING PLANTS</a></li>
                                                <li><a href="<?php echo base_url('Products');?>">CHILLERS</a></li>
												</ul>
												</div>
												<div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/vrv.jpg" alt="">
																</div>
                                                                <div class="description">
																	<p><a href="#">VRV COOLING SYSTEMS</a></p>
																</div>

															</div>
														</div>

														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
													<img src="<?php echo base_url();?>front_assets/images/hvac.jpg" alt="">
                                                                </div>
																<div class="description">
                                                            <p><a href="#">HVAC COOLING SYSTEMS</a></p>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/central-ac.jpg" alt="">
													               </div>
    								            <div class="description">
								                    <p><a href="#">CENTRAL AIR CONDITIONING PLANTS</a></p>
																</div>
															</div>
														</div>
													</div>
                                                    <hr>
												</div>

											</div>
										</li>

										<li class="has_megamenu">
											<a href="#">
                                                <span class="icon1">
                                                    <i><img src="<?php echo base_url();?>front_assets/images/icon-2.png" alt=".."></i>
                                                Commercial<br> Products
                                                </span>
                                                </a>
                                            <div class="mega_menu type_3 clearfix">
												<div class="mega_menu_item">
													<ul class="list_of_links">
												<li><a href="<?php echo base_url('Products');?>">CHEST DEEP FREEZER</a></li>
												<li><a href="<?php echo base_url('Products');?>">WATER COOLERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">VISI COOLERS</a></li>
												<li><a href="<?php echo base_url('Products');?>">ICE MACHINES</a></li>
                                                <li><a href="<?php echo base_url('Products');?>">GLASS TOP FREEZERS</a></li>
                                                <li><a href="<?php echo base_url('Products');?>">WATER DISPENSERS</a></li>
                                                <li><a href="<?php echo base_url('Products');?>">ICE MACHINES</a></li>
												</ul>
												</div>
												<div class="mega_menu_item products_in_mega_menu">
													<div class="row">
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/deepchest.jpg" alt="">
																</div>
                                                                <div class="description">
																<p><a href="#">CHEST DEEP FREEZER</a></p>
																</div>

															</div>
														</div>

														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
													<img src="<?php echo base_url();?>front_assets/images/watercooler.jpg" alt="">
                                                                </div>
																<div class="description">
                                                            <p><a href="#">WATER COOLERS</a></p>

																</div>

															</div>
														</div>
														<div class="col-sm-4">
															<div class="product_item">
																<div class="image_wrap">
																	<img src="<?php echo base_url();?>front_assets/images/visicooler.jpg" alt="">
													               </div>
    								            <div class="description">

								                        <p><a href="#">VISI COOLERS</a></p>

																</div>

															</div>
														</div>
													</div>
                                                    <hr>
												</div>

											</div>
										</li>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>