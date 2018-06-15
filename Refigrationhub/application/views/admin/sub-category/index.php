<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 28-05-2018
 * Time: 03:02 PM
 */

$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];

?>

<?php
$id = "";
$filename = "";
$file_path = "";

if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->subcat_id;
        $filename = $value->subcat_filename;
        $file_path = $value->subcat_fullpath;
    }
}
?>

<?php
$buttoName = '';
if (!empty($editResult[0]->subcat_id)) {
    $frmaction = base_url() . "admin/SubCategory/updateRecord";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "admin/SubCategory/addSubCategory";
    $buttoName = 'Add Sub-Category';
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

                        <h3 class="card-title">Add New Sub-Category</h3>
                    </div>

                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo $frmaction;?>">

                            <div class="form-group">
                                <label>Category  </label>
                                <select name="txtCategoryID" id="" class="form-control" required>
                                    <option value="">--Select category--</option>
                                    <?php foreach ($ddlCategory as $catVal):?>
                                    <option value="<?php echo $catVal->cat_id; ?>" <?php if(!empty($editResult) && ($editResult[0]->cat_id == $catVal->cat_id)){echo 'selected';} ?>><?php echo $catVal->cat_name;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <div class="form-group">
                                <label>Sub-Category Name </label>
                                <input type="text" name="txtSubCategoryName" class="form-control" required=""
                                       value="<?php if(!empty($editResult)){ echo $editResult[0]->subcat_name;}?>">
                            </div>
                            <!-----Hidden Value----->
                            <input type="hidden" name="hidden_id" class="form-control" required=""
                                   value="<?php  if(!empty($editResult)) {echo $editResult[0]->subcat_id; }?>">
                            <!-----Hidden Value----->
                            <div class="form-group">
                                <label>Upload Image(Size 258 * 172 )</label>
                                <input type="file" name="userfile" id="userfile" class="form-control"
                                       value="">
                                <?php
                             if (!empty($id)) {
                                    ?>
                                 <img src="<?php if(!empty($filename)){echo base_url() . 'uploads/subcategory/' . $filename; }else{ echo base_url() . 'uploads/empty/avator.png';}?>" height="100" width="100">

                                <?php } ?>
                                <input type="hidden" class="form-control" id="" name="hidden_id"
                                       value="<?php echo $id; ?>">
                                <input type="hidden" class="form-control" id="" name="file_name"
                                       value="<?php echo $filename; ?>">
                                <input type="hidden" class="file-custom" id="" name="full_path"
                                       value="<?php echo $file_path; ?>">
                            </div>

                            <!--------------------Seo------------->
                            <!--------------------Seo------------->
                            <?php /*if ($user_type == 1) { */?><!--
                                <a href="javascript:showhide('showSeo')">
                                    Click for Seo Content
                                </a>

                                <?php /*if (!empty($editResult)) { */?>

                                    <div id="showSeo" style="display:block;">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="txtSeoTitle">Title
                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="txtSeoTitle" name="txtSeoTitle"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->seo_title;
                                                       } else {
                                                           echo set_value('txtSeoTitle');
                                                       } */?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="MetaTag">Meta Tag

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="MetaTag" name="MetaTag"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_tag;
                                                       } else {
                                                           echo set_value('MetaTag');
                                                       } */?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="">Meta
                                                Keywords

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="TxtMetaKey" name="TxtMetaKey"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_keyword_descr;
                                                       } else {
                                                           echo set_value('TxtMetaKey');
                                                       } */?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="TxtMetaDescr">Meta
                                                Description

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="TxtMetaDescr" name="TxtMetaDescr"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_descr;
                                                       } else {
                                                           echo set_value('TxtMetaDescr');
                                                       } */?>">
                                            </div>
                                        </div>
                                    </div>

                                <?php /*} else { */?>

                                    <div id="showSeo" style="display:none;">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="">Title

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="txtSeoTitle" name="txtSeoTitle"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->seo_title;
                                                       } else {
                                                           echo set_value('txtSeoTitle');
                                                       } */?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="MetaTag">Meta Tag

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="MetaTag" name="MetaTag"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_tag;
                                                       } else {
                                                           echo set_value('MetaTag');
                                                       } */?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="TxtMetaKey">Meta
                                                Keywords

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="TxtMetaKey" name="TxtMetaKey"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_descr;
                                                       } else {
                                                           echo set_value('TxtMetaKey');
                                                       } */?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="TxtMetaDescr">Meta
                                                Description

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="TxtMetaDescr" name="TxtMetaDescr"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->meta_keyword_descr;
                                                       } else {
                                                           echo set_value('TxtMetaDescr');
                                                       } */?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="TxtMetaDescr">Alt
                                                Tag

                                                : </label>
                                            <div class="col-md-7">
                                                <input type="text" id="TxtAltTag" name="TxtAltTag"
                                                       class="form-control"
                                                       value="<?php /*if (!empty($editResult)) {
                                                           echo $editResult[0]->alt_tag;
                                                       } else {
                                                           echo set_value('TxtAltTag');
                                                       } */?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!--------------------Seo------------->

                                <?php /*}
                            } */?>


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
                            <input type="submit" id="btnSubmit" name="btnSubmit" class="<?php echo $BtnClass; ?>"
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
<script type="text/javascript">
    function showhide(showSeo) {
        var e = document.getElementById(showSeo);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
    }
</script>





