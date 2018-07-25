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
                        <h3 class="card-title">All User List <a style="float:right;"
                                                                href="<?php echo base_url(); ?>admin/Country">Add
                                Country</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sn.</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Delete Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sn = 1;
                            foreach ($list as $row): ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $row->country_name ?></td>
                                  <td><?php echo $row->created_at; ?> </td>
                                    <td><label class="badge badge-warning"><?php echo $row->delStatus; ?></label></td>
                                    <td><?php if ($row->status == 'Active') {
                                            echo "<label class='badge badge-success' >Active<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Inactive<label>";
                                        } ?> </td>
                                    <td class="">
                                        <a href="<?php echo base_url(); ?>admin/Country?id=<?php echo base64_encode($row->country_id); ?>"
                                           class="btn btn-primary">
                                            Edit
                                        </a>
                                        <?php if($user_type==1){?>
                                        <a href="<?php echo base_url(); ?>admin/Country/Restore?id=<?php echo base64_encode($row->country_id); ?>"
                                           class="btn btn-success">
                                            Restore
                                        </a>
                                        <?php }?>
                                        <a class="btn btn-danger"
                                           href="<?php echo base_url(); ?>admin/Country/deleteCountry?id=<?php echo base64_encode($row->country_id); ?>"
                                           onclick="return confirm('Would you want to delete Country Name  ?');">Delete</a>

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
      © 2018 Refrigeration.com All Rights Reserved Design & Development by  <a href="https://flawlessindia.in" target="_blank">FlawlessIndia.</a>
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
