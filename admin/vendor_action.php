<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        
        $vendorName = $_POST["vendorName"];
        $vendorLocation = $_POST["vendorLocation"];
        $vendorContact = $_POST["vendorContact"];

        $que=mysqli_query($con,"select * from vendor_tbl where vendorName ='$vendorName'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This Vendor "'.$vendorName.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into vendor_tbl(vendorName,vendorLocation,vendorContact,dateCreated) 
            value('$vendorName','$vendorLocation','$vendorContact','$currentDate')");
            if ($query) {
                $message ='<div style="color:green">Vendor Created Successfully!</div>';
            }
            else
            {
                $message = '<div style="color:red">An Error Occured!</div>';
            }
        }
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from vendor_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM vendor_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Vendor Deleted Successfully!</div>';
        }
    }
}

//all branch

?>