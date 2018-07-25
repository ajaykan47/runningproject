<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
//print_r($editResult); die;
//Array ( [0] => stdClass Object ( [aid_detail] => 1 [admin_dob] => [admin_education] => [admin_location] =>
// [admin_skill] => [admin_note] => [created_at] => 2018-05-23 14:31:37 [updated_at] => [login_id] => 1 ) )
$data['value'] = $this->session->userdata('logindetails');
$name = $data['value']['name'];
$username = $data['value']['username'];
$user_type = $data['value']['user_type'];
$mobile = $data['value']['mobile'];
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
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
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="<?php echo base_url(); ?>backend/dist/img/user4-128x128.jpg"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"> <?php if(!empty($name)){ echo $name ;}?></h3>

                        <p class="text-muted text-center"><?php if(!empty($editResult)){ echo $editResult[0]->admin_skill ;}?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fa fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            <?php if(!empty($editResult)){ echo $editResult[0]->admin_skill ;}?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                        <p class="text-muted"><?php if(!empty($editResult)){ echo $editResult[0]->admin_location ;}?></p>

                        <hr>

                        <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <?php if(!empty($editResult)){ echo $editResult[0]->admin_skill ;}?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                        <p class="text-muted"><?php if(!empty($editResult)){ echo $editResult[0]->admin_note ;}?></p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity"
                                                    data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                             src="<?php echo base_url(); ?>backend/dist/img/user1-128x128.jpg"
                                             alt="user image">
                                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments (5)
                          </a>
                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text"
                                           placeholder="Type a comment">
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                             src="<?php echo base_url(); ?>backend/dist/img/user7-128x128.jpg"
                                             alt="User Image">
                                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.post -->

                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm"
                                             src="<?php echo base_url(); ?>backend/dist/img/user6-128x128.jpg"
                                             alt="User Image">
                                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <img class="img-fluid"
                                                 src="<?php echo base_url(); ?>backend/dist/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3"
                                                         src="<?php echo base_url(); ?>backend/dist/img/photo2.png"
                                                         alt="Photo">
                                                    <img class="img-fluid"
                                                         src="<?php echo base_url(); ?>backend/dist/img/photo3.jpg"
                                                         alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3"
                                                         src="<?php echo base_url(); ?>backend/dist/img/photo4.jpg"
                                                         alt="Photo">
                                                    <img class="img-fluid"
                                                         src="<?php echo base_url(); ?>backend/dist/img/photo1.png"
                                                         alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments (5)
                          </a>
                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text"
                                           placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email
                                            </h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted
                                                your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
                                            </h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <li class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                            </h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="<?php echo base_url();?>admin/Profile/changeProfile" method="post">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="<?php if(!empty($name)){ echo $name ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="txtEmail"
                                                   placeholder="E-mail" name="txtEmail" value="<?php if(!empty($username)){ echo $username ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Mobile Number</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="txtMobile"
                                                 name="txtMobile"  placeholder="Mobile Number" value="<?php if(!empty($mobile)){ echo $mobile ;}?>">
                                        </div>
                                    </div>
                                   <!--- /******Admin-Detail***or Adminstration Detail****************************/-->
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">DOB</label>

                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="txtDob"
                                                   name="txtDob"  placeholder="Date of Birth" value="<?php if(!empty($editResult)){ echo $editResult[0]->admin_dob ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Education</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="txtEducation"
                                                   name="txtEducation"  placeholder=" Education" value="<?php if(!empty($editResult)){ echo $editResult[0]->admin_education ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Location </label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="txtLocation"
                                                   name="txtLocation"  placeholder=" Address" value="<?php if(!empty($editResult)){ echo $editResult[0]->admin_location ;}?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Skill </label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="txtSkill"
                                                   name="txtSkill"  placeholder=" Skill" value="<?php if(!empty($editResult)){ echo $editResult[0]->admin_skill ;}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Note </label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="txtNote"
                                                   name="txtNote"  placeholder="Note" value="<?php if(!empty($editResult)){ echo $editResult[0]->admin_note ;}?>">
                                        </div>
                                    </div>

                                    <!--- /**********************************/-->
                                 <!--  <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                          </label>
                                        </div>
                                      </div>
                                    </div>-->



                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" class="btn btn-danger" value="Save Changes" ></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
<script>
    $(document).ready(function() {script
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
    x++; //text box increment
    $(wrapper).append('<div><input type="text" name="mytext[]" placeholder="Account Title"><input type="text" name="mytext2[]" placeholder="Description"><input type="text" name="mytext3[]" placeholder="Credit"><input type="text" name="mytext4[]" placeholder="Debit"><a href="#" class="remove_field">Remove</a></div>'); //add input box
    }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    });
</script>

  
