<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phoneNo = $_POST["phoneNo"];
        $emailAddress = $_POST["emailAddress"];
        $password = $_POST["password"];
        $branchId = $_POST["branchId"];
        $departmentId = $_POST["departmentId"];
        $isActive = "Yes";

        $que=mysqli_query($con,"select * from branchusers_tbl where emailAddress ='$emailAddress'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This Branch User "'.$emailAddress.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into branchusers_tbl(firstName,lastName,phoneNo,emailAddress,password,branchId,departmentId,isActive,dateCreated) 
            value('$firstName','$lastName','$phoneNo','$emailAddress','$password','$branchId','$departmentId','$isActive','$currentDate')");
            if ($query) {
                $message ='<div style="color:green">Branch User Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from branchusers_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM branchusers_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Branch User Deleted Successfully!</div>';
        }
    }
}

//all branch

?>