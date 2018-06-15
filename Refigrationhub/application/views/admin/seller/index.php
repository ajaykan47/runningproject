<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 24-05-2018
 * Time: 01:02 PM
 */
?>
<?php
$id = "";
$name = "";
$mobile = "";
$password = "";
$status = "";
$username = "";

if (!empty($editResult)) {

    foreach ($editResult as $value) {
        $id = $value->id;
        $name = $value->name;
        $username = $value->username;
        $mobile = $value->mobile;
        $password = $value->password;
        $status = $value->status;
    }
}


$buttoName = '';
if (!empty($editResult[0]->id)) {
    $frmaction = base_url() . "admin/Seller/updateSeller";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/Seller/addSeller";
    $buttoName = 'Add User';
    $BtnClass = 'btn btn-raised btn-primary';
}
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8 col-xm-8 offset-2">
                <div class="card card-info">
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
                    <div class="card-header">

                        <h3 class="card-title">Add Seller</h3>
                    </div>

                    <div class="card-body">

                        <form class="form form-horizontal" action="<?php echo $frmaction; ?>" method="POST"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name <label style="color: red;">*</label></label>
                                <div class="input-group">

                                    <input type="text" name="txtName" class="form-control" required=""
                                           value="<?php echo $name; ?>">

                                </div>
                            </div>
                            <input type="hidden" name="hidden_id" class="form-control" required=""
                                   value="<?php echo $id; ?>">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Mobile <label style="color: red;">*</label></label>
                                    <div class="input-group">

                                        <input type="text" name="txtMobile" class="form-control" placeholder="Mobile"
                                               required="" value="<?php echo $mobile; ?>">

                                    </div>
                                </div>
                            </div>

                            <input type="submit" id="btnSubmit" class="<?php echo $BtnClass; ?>"
                                   value="<?php echo $buttoName; ?>">


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col (left) -->


        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Page script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPass").val();
            if (password != confirmPassword) {
                alert("Passwords do not match Please Try Again...!");
                return false;
            }
            return true;
        });
    });
</script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 5000);
    });
</script>
<style>
    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
    }
</style>



