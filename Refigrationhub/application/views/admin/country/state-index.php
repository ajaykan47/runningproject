<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];

/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 24-05-2018
 * Time: 01:02 PM
 */
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->state_id)) {
    $frmaction = base_url() . "admin/Country/updateState";
    $buttoName = 'Update State';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/Country/addState";
    $buttoName = 'Add State';
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

                        <h3 class="card-title">Add New State</h3>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" enctype="multipart/form-data"
                              action="<?php echo $frmaction; ?>">
                            <div class="form-group">
                                <label>Country </label>
                                <select name="txtCountryId" id="txtCountryId" class="form-control">
                                    <option value="">---Select Country---</option>
                                    <?php foreach ($ddlCountry as $valCountry):?>
                                    <option value="<?php echo $valCountry->country_id; ?>" <?php if(!empty($editResult) && $valCountry->country_id==$editResult[0]->country_id){ echo 'selected'; } ?>><?php echo $valCountry->country_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>State  </label>
                                <input type="text" name="txtStateName" class="form-control" required=""
                                       value="<?php if (!empty($editResult)){ echo $editResult[0]->state_name; } ?>">
                            </div>

                            <!--------Hidden ID------->
                            <input type="hidden" name="hidden_id" value="<?php if(!empty($editResult)){ echo $editResult[0]->state_id; }?>">
                            <!--------Hidden ID------->
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="label-control"> Status
                                         </label>
                                    <div class="">
                                        <input type="radio" required name="txtStatus"
                                               value="Active" <?php if (!empty($editResult) && $editResult[0]->status == 'Active') {
                                            echo 'checked';
                                        } ?> checked> Active<br>
                                        <input type="radio" required name="txtStatus"
                                               value="Inactive" <?php if (!empty($editResult) && $editResult[0]->status == 'Inactive') {
                                            echo 'checked';
                                        } ?>> Inactive<br>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" id="" name="btnSubmit" class="<?php echo $BtnClass; ?>"
                                   value="<?php echo $buttoName; ?>">
                        </form>
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
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>






