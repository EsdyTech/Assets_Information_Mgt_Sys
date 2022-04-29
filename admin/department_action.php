<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        
        $departmentName = $_POST["departmentName"];
        $description = $_POST["description"];

        $que=mysqli_query($con,"select * from department_tbl where departmentName ='$departmentName'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This Department "'.$departmentName.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into department_tbl(departmentName,description,dateCreated) 
            value('$departmentName','$description','$currentDate')");
            if ($query) {
                $message ='<div style="color:green">Department Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from department_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM department_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Department Deleted Successfully!</div>';
        }
    }
}

//all branch

?>