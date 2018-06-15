<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer id="footer"  data-bg-img="<?php echo base_url();?>front_assets/images/footer-bg.png" style="background-image: url(<?php echo base_url();?>front_assets/images/footer-bg.png)">
				<div class="footer_section">
					<div class="container">						
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<section class="widget copyright">
									<h4>About Us</h4>
									<ul class="list_of_links ">
										<li><a href="#">About Our Company</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Site Map</a></li>
									</ul>
								</section>
							</div>

							<div class="col-md-4 col-sm-4">
								<section class="widget ">
									<h4>BUYERS SECTION</h4>
									<ul class="list_of_links ">
										<li><a href="#">Browse Suppliers </a></li>
										<li><a href="#">Post Your Requirement</a></li>
										<li><a href="#">Subscribe Sell Trade Alerts</a></li>				
									</ul>
								</section>							
							</div>
							
							<div class="col-md-4 col-sm-4">
								<section class="widget ">
									<h4>Directory</h4>
									 <ul class="list_of_links">
										<li><a href="#">Manufacturers</a></li>
										<li><a href="#">Suppliers</a></li>	
                                         <li><a href="#">Featured Products</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="footer_section_3 align_center">
					<div class="container">
                        <div class="col-md-9">
                        
						<img src="<?php echo base_url();?>front_assets/images/logo.png" alt="..">
				<p class="copyright">&copy; 2018 Refrigrationhub.com All Rights Reserved Design by <a href="http://www.flawlessindia.in/" target="_blank" class="copyright">FlawlessIndia</a>.</p>
                        </div>
                        		<div class="col-md-3 pull-right">
								<section class="widget">
									<h4 class="streamlined_title bx">Follow Us</h4>
									<ul class="social_btns bx1">
										<li>
											<a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
										</li>

										<li>
											<a href="#" class="icon_btn middle_btn social_linkedin tooltip_container"><i class="icon-linkedin-5"></i><span class="tooltip top">LinkedIn</span></a>
										</li>

									</ul>									
								</section>
							</div>
					</div>
				</div>
			</footer>
		</div>
		<ul class="social_feeds">
			

			<li>

				<button class="icon_btn middle_btn social_contact open_"><i class="icon-mail-8"></i></button>

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Send Feedback</h3>

					</div><!--/ .animated_item-->
					 
					<div class="animated_item">
						<form class="contactform" novalidate>
							<ul>
								<li class="row">
									<div class="col-xs-12">
										<input type="text" required title="Name" name="cf_name" placeholder="Your name">
									</div>
								</li>
								<li class="row">
									<div class="col-xs-12">
										<input type="email" required title="Email" name="cf_email" placeholder="Your address">
									</div>
								</li>
								<li class="row">
									<div class="col-xs-12">
										<textarea placeholder="Message" required title="Message" name="cf_message" rows="6"></textarea>
									</div>
								</li>								
								<li class="row">
									<div class="col-xs-12">
										<button class="button_grey middle_btn">Send</button>
									</div>
								</li>
							</ul>
						</form>
					</div>
				</section>
			</li>			
		</ul>
		
        <script src="<?php echo base_url();?>front_assets/js/modernizr.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/jquery-2.1.1.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/queryloader2.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/bootstrap-ie.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/layerslider/js/greensock.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/layerslider/js/layerslider.transitions.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/jquery.appear.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/owlcarousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/jquery.countdown.plugin.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/jquery.countdown.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/arcticmodal/jquery.arcticmodal.js"></script>
		<script src="<?php echo base_url();?>front_assets/twitter/jquery.tweet.min.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/colorpicker/colorpicker.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/retina.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>front_assets/../../../s7.addthis.com/js/300/addthis_widget.js"></script>
        <script src="<?php echo base_url();?>front_assets/js/fastselect.standalone.min.js"></script>
		<!-- Theme files
		============================================ -->
		<script src="<?php echo base_url();?>front_assets/js/theme.styleswitcher.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/theme.plugins.js"></script>
		<script src="<?php echo base_url();?>front_assets/js/theme.core.js"></script>
        <script src="<?php echo base_url();?>front_assets/js/jquery.scrollbox.js"></script>
		<script>
                
                $('.singleSelectGrouped').fastselect();
            </script>
        <script>
$(function () {
  $('#demo1').scrollbox();
  
  
});
</script>
 <script>
        $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
        </script>
         <script src="<?php echo base_url();?>front_assets/js/bootstrap.min.js"></script>

	</body>
</html>