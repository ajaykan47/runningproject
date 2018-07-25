<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="secondary_page_wrapper sec">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
            <li>Feedback</li>
        </ul>
        <div class="row">
            <div class="col-md-4">
                <figure>
                    <img src="<?php echo base_url(); ?>front_assets/images/email.jpg" alt="..">
                </figure>
            </div>
            <div class="col-md-8 text-center">
                <div class="rfq">
                    <form action="<?php echo base_url(); ?>Feedback/addFeedBack" method="post">
                        <div class="form-group">
                            <select class="form-control">
                                <option>General</option>
                                <option>Buy Requirement</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtSubject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Enter your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtemail" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtCompanyname" class="form-control" placeholder="Compnay Name">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">+91</div>
                                <input type="text" name="txtMobile" class="form-control" id="exampleInputAmount"
                                       placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea rows="3" cols="3" name="txtMessage" class="form-control"
                                      placeholder="Message"></textarea>
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
			
			
			