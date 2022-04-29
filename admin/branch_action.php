<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        
        $branchName = $_POST["branch_name"];
        $branchLocation = $_POST["branch_location"];
        $branchAddress = $_POST["branch_address"];
        $branchContact = $_POST["branch_contact"];

        $que=mysqli_query($con,"select * from branch_tbl where branchName ='$branchName'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This Branch "'.$branchName.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into branch_tbl(branchName,branchLocation,branchAddress,branchContact,dateCreated) 
            value('$branchName','$branchLocation','$branchAddress','$branchContact','$currentDate')");
            if ($query) {
                $message ='<div style="color:green">Branch Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from branch_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM branch_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Branch Deleted Successfully!</div>';
        }
    }
}

//all branch

?>