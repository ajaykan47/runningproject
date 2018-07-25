<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="secondary_page_wrapper sec">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
            <li>Subscribe to Trade Alerts</li>
        </ul>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Subscribe to Trade Alerts</h2>
                <h5>Let us know what business opportunities you want to hear about. You will be alerted via email when
                    new buyers, sellers or trade opportunities you want to hear about are added.</h5>
                <div class="rfq col-md-6 col-md-offset-3">
                    <h2 id="open_shopping_cart">Products you Buy</h2>
                    <h3>Keywords</h3>
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
                    <form action="<?php echo base_url(); ?>SubscribeToSellTradeAlerts/addSubAlert" method="post">

                        <div class="form-group">
                            <textarea name="txtKeywords" rows="5" cols="5"
                                      placeholder="Use comma to seperate keywords. A keyword is a product/service name which can be a single or multiple words (eg. T-Shirt, Rotary Tiller, Electronic Circuit Board etc)."
                                      class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtMail" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">+91</div>
                                <input type="text" name="txtMobile" class="form-control" id=""
                                       placeholder="Mobile Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Set Alert" class="button_blue middle_btn">
                        </div>

                    </form>
                </div>
            </div>
        </div><!--/ .row -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->
			
			
			