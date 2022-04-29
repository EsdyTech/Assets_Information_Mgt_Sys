<?php
include('../includes/dbconnection.php');

//assets
$que1=mysqli_query($con,"select * from assetscategory_tbl");
$assetCat = mysqli_num_rows($que1);

//assets
$que2=mysqli_query($con,"select * from department_tbl");
$dept = mysqli_num_rows($que2);

//assets
$que3=mysqli_query($con,"select * from assetstransfer_tbl");
$assetTrans = mysqli_num_rows($que3);

//assets
$que4=mysqli_query($con,"select * from assets_tbl");
$assets = mysqli_num_rows($que4);

//assets
$que5=mysqli_query($con,"select * from branchusers_tbl");
$branchUsers = mysqli_num_rows($que5);

//assets
$que6=mysqli_query($con,"select * from branch_tbl");
$branch = mysqli_num_rows($que6);

//assets
$que7=mysqli_query($con,"select * from soldassests_tbl");
$sold = mysqli_num_rows($que7);

//assets
$que8=mysqli_query($con,"select * from vendor_tbl");
$vendor = mysqli_num_rows($que8);


?>