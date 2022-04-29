
<?php 
include('../includes/session.php');
include('head.php');
include('assetinfo_action.php');
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
                                        <button type="button" class="btn btn-custon-rounded-three btn-success" name="add_branch" id="add_branch"  data-toggle="modal" data-target="#branchModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Asset</button>
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
                                        <h1 id="modal_title">Create New Asset  <span class="basic-ds-n"></span></h1>
                                        
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
                                                                    <label class="login2">Name : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="assetName" id="branch_name" placeholder="Enter Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Description : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="assetDescription" id="branch_name" placeholder="Enter Description" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Amount : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" required data-parsley-trigger="keyup" name="amount" id="branch_name" placeholder="Enter Amount" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Quantity : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="number" class="form-control" required data-parsley-trigger="keyup" name="quantity" id="branch_name" placeholder="Enter Quantity" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Asset Category : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <?php 
                                                                    $query=mysqli_query($con,"select * from assetscategory_tbl ORDER BY categoryName ASC");                        
                                                                    $count = mysqli_num_rows($query);
                                                                    if($count > 0){                       
                                                                        echo '<select required name="assetCategoryId" class="form-control">';
                                                                        echo'<option value="">--Select Asset Category--</option>';
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                        echo'<option value="'.$row['id'].'" >'.$row['categoryName'].'</option>';
                                                                            }
                                                                                echo '</select>';
                                                                            }
                                                                ?>   
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Asset Vendor : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <?php 
                                                                    $query=mysqli_query($con,"select * from vendor_tbl ORDER BY vendorName ASC");                        
                                                                    $count = mysqli_num_rows($query);
                                                                    if($count > 0){                       
                                                                        echo '<select required name="vendorId" class="form-control">';
                                                                        echo'<option value="">--Select Asset Vendor--</option>';
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                        echo'<option value="'.$row['id'].'" >'.$row['vendorName'].'</option>';
                                                                            }
                                                                                echo '</select>';
                                                                            }
                                                                ?>   
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Branch : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <?php 
                                                                    $query=mysqli_query($con,"select * from branch_tbl ORDER BY branchName ASC");                        
                                                                    $count = mysqli_num_rows($query);
                                                                    if($count > 0){                       
                                                                        echo '<select required name="branchId" class="form-control">';
                                                                        echo'<option value="">--Select Branch--</option>';
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                        echo'<option value="'.$row['id'].'" >'.$row['branchName'].'</option>';
                                                                            }
                                                                                echo '</select>';
                                                                            }
                                                                ?>   
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Department : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                <?php 
                                                                    $query=mysqli_query($con,"select * from department_tbl ORDER BY departmentName ASC");                        
                                                                    $count = mysqli_num_rows($query);
                                                                    if($count > 0){                       
                                                                        echo '<select required name="departmentId" class="form-control">';
                                                                        echo'<option value="">--Select Department--</option>';
                                                                        while ($row = mysqli_fetch_array($query)) {
                                                                        echo'<option value="'.$row['id'].'" >'.$row['departmentName'].'</option>';
                                                                            }
                                                                                echo '</select>';
                                                                            }
                                                                ?>   
                                                                </div>
                                                            </div>
                                                        </div>   
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Date Purchased : </label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="date" class="form-control" required data-parsley-trigger="keyup" name="datePurchased" id="branch_name" placeholder="Enter Date Purchased" />
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
                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Create" />
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
                                            <li><span class="bread-blod">Asset Information</span>
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
                                        <h1>All Asset List <span class="table-project-n"></span></h1>
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
                                                    <th data-editable="true">Asset ID</th>
                                                    <th data-editable="true">Name</th>
                                                    <th data-editable="true">Description</th>
                                                    <th data-editable="true">Amount</th>
                                                    <th data-editable="true">Qty</th>
                                                    <th data-editable="true">QtyRem</th>
                                                    <th data-editable="true">Category</th>
                                                    <th data-editable="true">Vendor</th>
                                                    <th data-editable="true">Branch</th>
                                                    <th data-editable="true">Department</th>
                                                    <th data-editable="true">Date Purchased</th>
                                                    <th data-editable="true">Date Created</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $cnt = 1;
                                                $que=mysqli_query($con,"SELECT assets_tbl.id,assets_tbl.assetId, assets_tbl.assetName, assets_tbl.assetDescription, assets_tbl.amount,
                                                 assets_tbl.quantity,assets_tbl.quantityRem, assets_tbl.datePurchased, assets_tbl.dateCreated, 
                                                 branch_tbl.branchName,department_tbl.departmentName,vendor_tbl.vendorName,assetscategory_tbl.categoryName
                                                from assets_tbl
                                                INNER JOIN branch_tbl ON branch_tbl.id = assets_tbl.branchId
                                                INNER JOIN department_tbl ON department_tbl.id = assets_tbl.departmentId
                                                INNER JOIN assetscategory_tbl ON assetscategory_tbl.id = assets_tbl.assetCategoryId
                                                INNER JOIN vendor_tbl ON vendor_tbl.id = assets_tbl.vendorId ");
                                                while ($row=mysqli_fetch_array($que)) {
                                             ?>
                                                <tr>
                                                    <td><?php echo $cnt;?></td>
                                                    <td><?php echo $row['assetId'];?></td>
                                                    <td><?php echo $row['assetName'];?></td>
                                                    <td><?php echo $row['assetDescription'];?></td>
                                                    <td><?php echo $row['amount'];?></td>
                                                    <td><?php echo $row['quantity'];?></td>
                                                    <td><?php echo $row['quantityRem'];?></td>
                                                    <td><?php echo $row['categoryName'];?></td>
                                                    <td><?php echo $row['vendorName'];?></td>
                                                    <td><?php echo $row['branchName'];?></td>
                                                    <td><?php echo $row['departmentName'];?></td>
                                                    <td><?php echo $row['datePurchased'];?></td>
                                                    <td><?php echo $row['dateCreated'];?></td>
                                                    <td><a href="?delid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
        

