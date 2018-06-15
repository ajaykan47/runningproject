<div class="join-now-gray-area join-now padding-30-b sec1">
    <!-- content area start -->
    <div class="join-now-bg">
        <h1 class="center">Welcome to Refrigration Hub</h1>
        <h2 class="center">Join Millions Trading On India's Largest B2B E-Commerce Platform!<br>Promote To Buyers Across
            The Globe and Contact Trusted Suppliers
        </h2>
    </div>
    <!-- content area end -->


    <div class="join-now-container fix-row clearfix">
        <div class="container-small">
            <!-- progress part start -->
            <ul>
                <li class="li-width">
                    <div class="full-width">
                        <span class="circle red-selected">1</span>
                        <span class="gray-line red-selected"></span>
                    </div>
                    <div class="full-width">
                        <span class="circle-text">Verification</span>
                    </div>
                </li>
                <li class="li-width">
                    <div class="full-width">
                        <span class="circle">2</span>
                        <span class="gray-line"></span>
                    </div>
                    <div class="full-width">
                        <span class="circle-text">Login</span>
                    </div>
                </li>
                <li class="last-li-width">
                    <div class="full-width">
                        <span class="circle">✔</span>
                    </div>
                    <div class="full-width">
                        <span class="circle-text">Get Started</span>
                    </div>
                </li>
            </ul>
            <div class="col-md-6 col-md-offset-3 ">
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
                <form action="<?php echo base_url(); ?>JoinFree/registration" method="POST">
                    <div class="form-group">
                        <select name="txtRegUserType" id="">
                            <option value="">---Select Type---</option>
                            <option value="1">Guest</option>
                            <option value="2">Seller</option>
                            <option value="3">Buyer</option>
                        </select>
                    </div>
					<div class="form-group">
                        <input type="email" class="form-control" name="txtMail" placeholder="Email-Id">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">+91</div>
                            <input type="text" class="form-control" id="exampleInputAmount" name="txtNumber"
                                   placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtName" placeholder="Enter your Name...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtCompanyName" placeholder="Company Name...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtPinCode" placeholder="Pin Code...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtCityName" placeholder="Type your city here (optional)...">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Verify" class="button_blue middle_btn">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
		