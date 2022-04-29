<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        $count_my_page = ("../hitcounter.txt");
        $hits = file($count_my_page);
        $hits[0]++;
        $fp = fopen($count_my_page , "w");
        fputs($fp , "$hits[0]");
        fclose($fp);
        $assetId=$hits[0];

        $assetName = $_POST["assetName"];
        $assetDescription = $_POST["assetDescription"];
        $amount = $_POST["amount"];
        $quantity = $_POST["quantity"];
        $assetCategoryId = $_POST["assetCategoryId"];
        $vendorId = $_POST["vendorId"];
        $branchId = $_POST["branchId"];
        $departmentId = $_POST["departmentId"];
        $datePurchased = $_POST["datePurchased"];

        $query=mysqli_query($con,"insert into assets_tbl(assetId,assetName,assetDescription,amount,quantity,quantityRem,assetCategoryId,vendorId,branchId,departmentId,datePurchased,dateCreated) 
        value('$assetId','$assetName','$assetDescription','$amount','$quantity','$quantity','$assetCategoryId','$vendorId','$branchId','$departmentId','$datePurchased','$currentDate')");
        if ($query) {
            $message ='<div style="color:green">Asset Created Successfully!</div>';
        }
        else
        {
            $message = '<div style="color:red">An Error Occured!</div>';
        }
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from assets_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM assets_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Asset Deleted Successfully!</div>';
        }
    }
}

//all branch

?>