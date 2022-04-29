
<?php 
include('../includes/session.php');
include('head.php');
include('user_action.php');
?>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
    <?php include('sidebar.php');?>
        <!-- Header top area start-->
        <div class="content-inner-all">
        <?php include('header.php');?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="button" class="btn btn-custon-rounded-three btn-success" name="add_branch" id="add_branch"  data-toggle="modal" data-target="#branchModal"><i class="fa fa-history"></i>&nbsp;&nbsp;Update Profile</button>
                                        <button type="button" class="btn btn-custon-rounded-three btn-success" name="add_branch" id="add_branch"  data-toggle="modal" data-target="#passwordModal"><i class="fa fa-history"></i>&nbsp;&nbsp;Change Password</button>

                            <div id="branchModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp" role="dialog">
                                <div class="modal-dialog">
                                <form id="branch_form" method="post">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1 id="modal_title">Update Profile<span class="basic-ds-n"></span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <!-- <h3>Fill In the Asset Details: </h3> -->
                                                    <span id="form_message"></span>
                                                    <?php if(isset($form_message)){echo $form_message;}?>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">FirstName : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="firstName" value="<?php echo $rets['firstName'];?>" placeholder="Enter First Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">LastName : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="lastName" value="<?php echo $rets['lastName'];?>" placeholder="Enter Last Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Email Address : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" readonly name="emailAddress" value="<?php echo $rets['emailAddress'];?>" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer footer-modal-admin">
                    <input type="hidden" name="action" id="action" value="updateProfile" />
                    <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Update" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <!-- <a href="#">Save</a> -->
                                </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div id="passwordModal" class="modal modal-adminpro-general fullwidth-popup-InformationproModal zoomInUp" role="dialog">
                                <div class="modal-dialog">
                                <form id="branch_form" method="post">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1 id="modal_title">Change Password<span class="basic-ds-n"></span></h1>
                                        
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <!-- <h3>Fill In the Asset Details: </h3> -->
                                                    <span id="form_message"></span>
                                                    <?php if(isset($form_message)){echo $form_message;}?>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Current Password : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="password" class="form-control" required name="currentPassword" placeholder="Enter Current Passsword" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">New Password : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="password" class="form-control" required  name="newPassword" placeholder="Enter New Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Confirm Password : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="password" class="form-control" required  name="conPassword"  placeholder="Confirm Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer footer-modal-admin">
                    <input type="hidden" name="action" id="action" value="updatePassword" />
                    <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Update" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <!-- <a href="#">Save</a> -->
                                </div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    </form>
                                    
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Dashboard</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Profile</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <span id="message"></span>
                        <?php if(isset($message)){echo $message."<br>";}?>
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Admin Profile <span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true"  data-click-to-select="true" >
                                            <thead>
                                                <tr>
                                                    <th data-editable="true">S/N</th>
                                                    <th data-editable="true">FirstName</th>
                                                    <th data-editable="true">LastName</th>
                                                    <th data-editable="true">Email Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $cnt = 1;
                                                $que=mysqli_query($con,"SELECT * from admin_tbl");
                                                while ($row=mysqli_fetch_array($que)) {
                                             ?>
                                                <tr>
                                                    <td><?php echo $cnt;?></td>
                                                    <td><?php echo $row['firstName'];?></td>
                                                    <td><?php echo $row['lastName'];?></td>
                                                    <td><?php echo $row['emailAddress'];?></td>
                                                </tr>
                                                <?php
                                                 $cnt=$cnt+1;
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                <div id="edit" class="modal modal-adminpro-general fullwidth-popup-InformationproModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                            <form>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                    <div class="col-lg-12">
                            <div class="sparkline9-list shadow-reset">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>Branch<span class="basic-ds-n">Form</span></h1>
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner">
                                                    <h3>Update Branch Details : </h3>
                                                    <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Name : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_name" id="branch_name" placeholder="Enter Branch Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Location : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_location" id="branch_location" placeholder="Enter Location" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Contact : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_contact" id="branch_contact" placeholder="Enter Contact Information" />
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Address : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="branch_address" id="branch_address" placeholder="Enter Address" />
                                                                </div>
                                                            </div>
                                                        </div>                                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer footer-modal-admin">
                        <a data-dismiss="modal" href="#">Cancel</a>
                            <a href="#">Save</a>
                                </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
    <!-- Chat Box Start-->
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->

        <?php include('footer.php');?>
        

