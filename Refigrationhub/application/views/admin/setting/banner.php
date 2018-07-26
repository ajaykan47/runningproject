<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-06-2018
 * Time: 10:02 AM
 */

$id = "";
$title = "";
$filename = "";
$file_path = "";
$status = "";

if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->banner_id;
        $title = $value->title;
        $filename = $value->filename;
        $file_path = $value->filepath;
        $status = $value->status;
    }
}
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->banner_id)) {
    $frmaction = base_url() . "admin/Setting/updateBanner";
    $buttoName = 'Update Banner';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/Setting/addBanner";
    $buttoName = 'Add Banner';
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

                        <h3 class="card-title">Upload Banner</h3>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" enctype="multipart/form-data"
                              action="<?php echo $frmaction; ?>">
                            <div class="form-group">
                                <label>Banner Title</label>
                                <input type="text" name="txtBannerTitle" class="form-control" required=""
                                       value="<?php if (!empty($editResult)) {
                                           echo $editResult[0]->title;
                                       } else {
                                           echo set_value('txtBannerTitle');
                                       } ?>">
                            </div>
                            <!--------Hidden ID------->
                            <input type="hidden" name="hidden_id" value="<?php if (!empty($editResult)) {
                                echo $editResult[0]->banner_id;
                            } ?>">
                            <!--------Hidden ID------->

                            <div class="form-group">
                                <label class="label-control">Upload Banner Image (1170*270): </label>
                                <input type="file" class="form-control" id="userfile"
                                       name="userfile" placeholder="">
                                <span class="file-custom"></span>
                                <?php
                                if (!empty($id)) {
                                    ?>

                                    <img src="
                          <?php echo base_url() . 'uploads/banner/' . $filename; ?>" height="100" width="100">

                                <?php } ?>
                                <input type="hidden" class="form-control" id="" name="hidden_id"
                                       value="<?php echo $id; ?>">
                                <input type="hidden" class="form-control" id="" name="file_name"
                                       value="<?php echo $filename; ?>">
                                <input type="hidden" class="file-custom" id="" name="full_path"
                                       value="<?php echo $file_path; ?>">

                                </span>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label class="label-control"> Status
                                        : </label>
                                    <div class="">

                                        <input type="radio" required name="txtStatus"
                                               value="active" <?php if (!empty($editResult) && $editResult[0]->status == 'active') {
                                            echo 'checked';
                                        } ?> checked> Active<br>
                                        <input type="radio" required name="txtStatus"
                                               value="inactive" <?php if (!empty($editResult) && $editResult[0]->status == 'inactive') {
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
        }, 4000);
    });
</script>






