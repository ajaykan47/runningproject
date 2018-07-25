<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
			<div class="secondary_page_wrapper sec">
				<div class="container">
					<ul class="breadcrumbs">
						<li><a href="<?php echo base_url('Home');?>">Home</a></li>
						<li>RFQ Request For Quotation</li>
					</ul>
					<div class="row">
						<div class="col-md-12 text-center">
                        <h2>RFQ Request For Quotation</h2>
                            <h3>Get Quotes For Your Buying Requirement. Tell Suppliers What You Need.</h3>
                            <?php if ($this->session->flashdata('done')) { ?>
                                <div align="center" class="disMes alert alert-success">
                                    <?php echo $this->session->flashdata('done') ?>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div align="center" class="disMes alert alert-danger">
                                    <?php echo $this->session->flashdata('error') ?>
                                </div>
                            <?php } ?>
                            <div class="rfq col-md-6 col-md-offset-3">

                                <form action="<?php echo base_url('PostBuyRequirements/sendRequirement');?>"  method="post">
                            <div class="form-group">
                                <input type="text" name="txtProductName" class="form-control" required="" placeholder="Enter product name you want to buy">
                                </div>
                                    <div class="form-group">
                                    <textarea rows="5" cols="5" name="txtDescRequirement"  placeholder="Describe Your BUYING Requirement" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" required="" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">+91</div>
                                        <input type="text" class="form-control" id="" name="txtMobile"  required="" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" value="Post Buy Requirement" class="button_blue middle_btn">
                                    </div>
                                    <div class="form_group">
                     <input checked="" type="checkbox" name="txtTermCondition" id="checkbox_1">
					<label for="checkbox_1">I agree to abide by all the Terms and Conditions of refrigrationhub.com</label>
				</div>
                                    </form>
                            </div>
                        </div>
					</div><!--/ .row -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			
			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
		