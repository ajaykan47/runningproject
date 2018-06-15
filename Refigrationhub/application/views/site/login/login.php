<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
			<div class="secondary_page_wrapper">
				<div class="container">
					<div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2>Welcome to Refrigeration Hub!</h2>
                        <h4>Sign in</h4>
                        <h4>with your Refrigeration Hub Account</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
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
                            <div class="login1">

                                <figure>
                                <img src="<?php echo base_url();?>front_assets/images/login-user.png" alt="..">
                                </figure>
                               <form action="<?php echo base_url();?>Login/userLogin" method="POST" class="pd2">
                                <div class="form-group">
                                   <input type="text" placeholder="Email or username" class="form-control" name="inputEmail">
                                   </div>
                                   <div class="form-group">
                                   <input type="password" class="form-control" placeholder="********" name="inputPass">
                                   </div>
                                   <div class="form-group">
                                   <input type="submit" value="Sign In" class="button_blue middle_btn">
                                   </div>
                                </form>
                                <a href="#" class="pull-left">Forgot Your Password ?</a>
                                <h4 class="pull-right">New User? <a href="<?php echo base_url(); ?>JoinFree">Join Free</a></h4>
                            </div>
                        </div>
					</div>					
				</div><!--/ .container-->
			</div><!--/ .page_wrapper-->
			
			
			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 5000);
    });
</script>
		