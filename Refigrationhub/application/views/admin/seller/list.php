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
                        <h3 class="card-title">User List</h3>
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
                        <h3 class="card-title">admin User List <a style="float:right;"
                                                                  href="<?php echo base_url(); ?>admin/User">Add
                                User</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>User Name</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $Sn = 1;
                                foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $Sn++; ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->mobile ?> </td>
                                        <td><?php echo $row->username ?> </td>
                                        <td><?php if ($row->user_type == '1') {
                                                echo "<label class='badge badge-danger' >Adminstration<label>";
                                            } else if($row->user_type == '2'){
                                                echo "<label class='badge badge-warning' >Admin<label>";
                                            }
                                            else if($row->user_type == '3'){
                                                echo "<label class='badge badge-success' >Sub-Admin<label>";
                                            }
                                            ?> </td>
                                        <td><?php echo $row->created ?> </td>
                                        <td><?php if ($row->status == 1) {
                                                echo "<label class='label label-success' >Active<label>";
                                            } else {
                                                echo "<label class='label label-warning' >Inactive<label>";
                                            } ?> </td>
                                        <td class="center">
                                            <a href="<?php echo base_url(); ?>admin/User?id=<?php echo base64_encode($row->id); ?>"
                                               class="btn btn-primary">
                                                Edit
                                            </a>
                                            <a data-toggle="modal" data-target="#myModal<?php echo $row->id; ?>"
                                               href="<?php echo base_url(); ?>admin/User/ChangePassword?id=<?php echo base64_encode($row->id); ?>"
                                               class="btn btn-success">
                                                Change Password
                                            </a>
                                            <a class="btn btn-danger"
                                               href="<?php echo base_url(); ?>admin/User/deleteUser?id=<?php echo base64_encode($row->id); ?>"
                                               onclick="return confirm('Would you want to delete?');">Delete</a>

                                        </td>
                                        <td>

                                            <div class="modal fade" id="myModal<?php echo $row->id; ?>"
                                                 tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Reset
                                                                Password
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?php echo base_url('admin/User/ChangePassword'); ?>"
                                                              method="post">
                                                            <div class="modal-body">
                                                                <div id="" style="">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-3 label-control" for="">
                                                                            Password </label>
                                                                        <div class="input-group">
                                                                            <input type="password" class="form-control"
                                                                                   name="txtPassword" id="txtPassword"
                                                                                   placeholder="Password" required=""
                                                                                   value="">
                                                                        </div>
                                                                        <input type="hidden" name="hidden_id" value="<?php echo $row->id ;?>">

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Confirm Password :</label>

                                                                        <div class="input-group">
                                                                            <input type="password" class="form-control"
                                                                                   name="txtConfirmPass"
                                                                                   id="txtConfirmPass"
                                                                                   placeholder="Confirm Password"
                                                                                   required="" value="">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" value="<?php echo $row->username ?>" name="username">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <input type="submit" id="btnSubmit" class="btn btn-primary" value="Save changes"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
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
</div>
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
        }, 4000);
    });
</script>
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

</body>
</html>
