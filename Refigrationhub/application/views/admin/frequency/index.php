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
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->mast_frequency_id)) {
    $frmaction = base_url() . "admin/Frequency/updateFrequency";
    $buttoName = 'Update Record';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/Frequency/addFrequency";
    $buttoName = 'Add Record';
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

                        <h3 class="card-title">Add Frequency</h3>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" enctype="multipart/form-data"
                              action="<?php echo $frmaction; ?>">
                            <div class="form-group">
                                <label>Frequency</label>
                                <input type="text" name="txtFrequency" class="form-control" required=""
                                       value="<?php if (!empty($editResult)) {
                                           echo $editResult[0]->frequency_name;
                                       } else {
                                           echo set_value('txtFrequency');
                                       } ?>">
                            </div>
                            <!--------Hidden ID------->
                            <input type="hidden" name="hidden_id" value="<?php if (!empty($editResult)) {
                                echo $editResult[0]->mast_frequency_id;
                            } ?>">
                            <!--------Hidden ID------->
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="label-control"> Status
                                        : </label>
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

<!----------Table or Listing----------->
<section class="content">
    <div class="container-fluid">
        <div class="table-responsive row">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sn.</th>
                    <th>Frequency</th>
                    <th>Date</th>
                    <th>Update</th>

                    <th>Status</th>
                    <?php if ($user_type == 1) { ?>
                        <th>Del Status</th>
                    <?php } ?>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $Sn = 1;
                foreach ($list as $row): ?>
                    <tr>
                        <td><?php echo $Sn++; ?></td>
                        <td><?php echo $row->frequency_name ;?></td>
                        <td><?php echo $row->created_at ;?> </td>
                        <td><?php echo $row->updated_at ;?> </td>
                        <td><?php if ($row->status == 'Active') {
                                echo "<label class='badge badge-success' >Active<label>";
                            } else {
                                echo "<label class='badge badge-warning' >Inactive<label>";
                            } ?> </td>

                        <?php if($user_type==1):?>
                            <td><?php if ($row->delStatus == 'yes') { ?>
                                    <a href="<?php echo base_url(); ?>admin/Frequency/Restore?id=<?php echo base64_encode($row->mast_frequency_id); ?>"
                                       onclick="return confirm('Would you want to restore Frequency...?');"
                                       class="badge badge-warning">
                                        Restore
                                    </a>
                                <?php } else {
                                    echo "<label class='badge badge-success' >Active<label>";
                                } ?> </td>
                        <?php endif; ?>


                        <td class="center">
                            <a href="<?php echo base_url(); ?>admin/Frequency?id=<?php echo base64_encode($row->mast_frequency_id); ?>"
                               class="btn btn-primary">
                                Edit
                            </a>
                            <a class="btn btn-danger"
                               href="<?php echo base_url(); ?>admin/Frequency/deleteFrequency?id=<?php echo base64_encode($row->mast_frequency_id); ?>"
                               onclick="return confirm('Would you want to delete?');">Delete</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</section>
<!----------Table or Listing----------->

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






