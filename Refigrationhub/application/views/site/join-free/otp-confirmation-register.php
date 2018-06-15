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
                <form action="<?php echo base_url(); ?>JoinFree/confirmationOtpSuccess" method="POST">
                    <div class="form-group">

                        <input type="text" class="form-control" name="txtVarification" placeholder="Enter Six Digit Verification Code...!">
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Submit" class="button_blue middle_btn">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


		