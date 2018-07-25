<?php
defined('BASEPATH') OR exit('NAdministrationpt access allowed');

$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
?>

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap4.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category List</h3>
                    </div>
                </div>
                <!-- /.card -->
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Category List <a style="float:right;"
                                                                    href="<?php echo base_url(); ?>admin/Category">Add
                                Category</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sn.</th>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Added By</th>
                                <?php if ($user_type == 1) { ?>

                                    <th>Delete Ip</th>
                                    <th>Delete Date</th>
                                    <th>Delete Status</th>
                                <?php } ?>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sn = 1;
                            foreach ($list as $row): ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><img src="<?php if (!empty($row->file_name)) {
                                            echo base_url() . 'uploads/category/' . $row->file_name;
                                        } else {
                                            echo base_url() . 'uploads/empty/avator.png';
                                        } ?>" height="100" width="100">
                                    </td>

                                    <td><?php echo $row->cat_name ?></td>
                                    <td><?php if ($row->created_by == '1') {
                                            echo "<label class='badge badge-success' >Adminstration<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Admin<label>";
                                        } ?> </td>
                                    <?php if ($user_type == 1) { ?>

                                        <td><?php echo $row->delIp; ?> </td>
                                        <td><?php echo $row->delDate; ?> </td>
                                    <?php } ?>
                                    <?php if ($user_type == 1) { ?>
                                        <td><?php if ($row->delStatus == 'yes') { ?>
                                                <a href="<?php echo base_url(); ?>admin/Category/Restore?id=<?php echo base64_encode($row->cat_id); ?>"
                                                   onclick="return confirm('Would you want to restore category ?');"
                                                   class="badge badge-warning">
                                                    Restore
                                                </a>
                                            <?php } else {
                                                echo "<label class='badge badge-success' >Active<label>";
                                            } ?> </td>
                                    <?php } ?>


                                    <td><?php echo $row->created_at; ?> </td>
                                    <td><?php if ($row->status == 'Active') {
                                            echo "<label class='badge badge-success' >Active<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Inactive<label>";
                                        } ?> </td>
                                    <td class="">
                                        <a href="<?php echo base_url(); ?>admin/Category?id=<?php echo base64_encode($row->cat_id); ?>"
                                           class="btn btn-primary">
                                            Edit
                                        </a>
                                        <a data-toggle="modal" data-target="#myModal<?php echo $row->cat_id; ?>"
                                           href="<?php echo base_url(); ?>admin/Category/Show?id=<?php echo base64_encode($row->cat_id); ?>"
                                           class="btn btn-success">
                                            View
                                        </a>

                                        <a class="btn btn-danger"
                                           href="<?php echo base_url(); ?>admin/Category/deleteCategory?id=<?php echo base64_encode($row->cat_id); ?>"
                                           onclick="return confirm('Would you want to delete category record ?');">Delete</a>

                                    </td>
                                    <td>

                                        <div class="modal fade" id="myModal<?php echo $row->cat_id; ?>" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Category
                                                            Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="" style="">
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="">Category
                                                                    Name : </label>
                                                                <div class="col-md-7">
                                                                    <input type="text" id="txtSeoTitle" name="" readonly
                                                                           class="form-control"
                                                                           value="<?php echo $row->cat_name ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="">Title
                                                                    : </label>
                                                                <div class="col-md-7">
                                                                    <input type="text" id="txtSeoTitle"
                                                                           name="txtSeoTitle"
                                                                           class="form-control" readonly
                                                                           value="<?php echo $row->seo_title ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="MetaTag">Meta
                                                                    Tag : </label>
                                                                <div class="col-md-7">
                                                                    <input type="text" id="MetaTag" name="MetaTag"
                                                                           class="form-control" readonly
                                                                           value="<?php echo $row->meta_tag ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="label-control" for="TxtMetaKey">Meta
                                                                    Keywords

                                                                    : </label>
                                                                <div class="col-md-7">
                                                                    <input type="text" id="TxtMetaKey" name="TxtMetaKey"
                                                                           readonly
                                                                           class="form-control"
                                                                           value="<?php echo $row->meta_keyword_descr ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control"
                                                                       for="TxtMetaDescr">Meta
                                                                    Description

                                                                    : </label>
                                                                <div class="col-md-7">
                                                                    <input type="text" id="TxtMetaDescr"
                                                                           name="TxtMetaDescr" readonly
                                                                           class="form-control"
                                                                           value="<?php echo $row->meta_descr ?>">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
</div>
<!-- Button trigger modal -->
<!-- /.content-wrapper -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
        Anything you want
    </div>
    <!-- Default to the left -->
    © 2018 Refrigeration.com All Rights Reserved Design & Development by <a href="https://flawlessindia.in"
                                                                            target="_blank">FlawlessIndia.</a>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>backend/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>backend/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>

</body>
</html>
