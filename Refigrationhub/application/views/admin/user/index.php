<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 24-05-2018
 * Time: 01:02 PM
 */

$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
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
    $frmaction = base_url() . "admin/User/updateUser";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/User/addUser";
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

                        <h3 class="card-title">Add New User</h3>
                    </div>

                    <div class="card-body">

                        <form class="form form-horizontal" action="<?php echo $frmaction; ?>" method="POST"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name <label style="color: red;">*</label></label>
                                <div class="input-group">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="txtName" class="form-control" required=""
                                           value="<?php echo $name; ?>">

                                </div>
                            </div>
                            <input type="hidden" name="hidden_id" class="form-control" required=""
                                   value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label>E-mail/User Name <label style="color: red;">*</label></label>

                                <div class="input-group my-colorpicker2">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="email" class="form-control" name="txtMail" placeholder="E-mail"
                                           required="" value="<?php echo $username; ?>">

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-square"></i></span>
                                    </div>
                                </div>

                            </div>
                            <?php if (empty($editResult)) {
                                ?>
                                <div class="form-group">
                                    <label>Password <label style="color: red;">*</label></label>

                                    <div class="input-group">
                                        <i class="fa fa-key icon"></i>
                                        <input type="password" class="form-control" name="txtPassword" id="txtPassword"
                                               placeholder="Password" required="" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password <label style="color: red;">*</label></label>

                                    <div class="input-group">
                                        <i class="fa fa-key icon"></i>
                                        <input type="password" class="form-control" name="txtConfirmPass"
                                               id="txtConfirmPass"
                                               placeholder="Confirm Password" required="" value="">
                                    </div>
                                </div>
                            <?php }
                            ?>

                            <div class="form-group">
                                <div class="form-group">
                                    <label>Mobile <label style="color: red;">*</label></label>
                                    <div class="input-group">
                                        <i class="fa fa-mobile icon"></i>
                                        <input type="text" name="txtMobile" class="form-control" placeholder="Mobile"
                                               required="" value="<?php echo $mobile; ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>User Type <label style="color: red;">*</label></label>

                                    <div class="input-group">
                                        <select name="txtUserType" class="form-control" required="">
                                            <option value="">--Select Type--</option>
                                            <?php
                                            if($user_type==1){?>
                                            <option value="1" <?php if ($status == 1) { echo 'selected'; } ?>>Administration</option>
                                            <?php }
                                            ?>
                                            <option value="2" <?php if ($status == 2) { echo 'selected'; } ?>>Admin</option>
                                            <option value="3" <?php if ($status == 3) { echo 'selected'; } ?>>Sub-Admin</option>

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status <label style="color: red;">*</label></label>

                                <div class="input-group">
                                    <select name="txtStatus" class="form-control" required="">
                                        <option value="">--Select Status--</option>
                                        <option value="1" <?php if ($status == 1) {
                                            echo 'selected';
                                        } ?>>Active
                                        </option>
                                        <option value="2" <?php if ($status == 2) {
                                            echo 'selected';
                                        } ?>>Inactive
                                        </option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Privilege</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type='checkbox' name='txtPrivilege[]' value='1'>Manage Lead
                                        <input type='checkbox' name='txtPrivilege[]' value='2'>Manage User
                                        <input type='checkbox' name='txtPrivilege[]' value='3'>Manage Product
                                        <input type='checkbox' name='txtPrivilege[]' value='4'>Manage Country
                                        <input type='checkbox' name='txtPrivilege[]' value='5'>Manage Mode Of Payment
                                        <input type='checkbox' name='txtPrivilege[]' value='6'>Manage Frequency
                                        <input type='checkbox' name='txtPrivilege[]' value='7'>Manage Ownership Type
                                        <input type='checkbox' name='txtPrivilege[]' value='8'>Manage Seller
                                        <input type='checkbox' name='txtPrivilege[]' value='9'>Manage Buyer
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



