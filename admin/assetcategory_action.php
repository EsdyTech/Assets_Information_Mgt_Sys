<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        
        $categoryName = $_POST["categoryName"];
        $description = $_POST["description"];

        $que=mysqli_query($con,"select * from assetscategory_tbl where categoryName ='$categoryName'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This Asset Category "'.$categoryName.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into assetscategory_tbl(categoryName,description,dateCreated) 
            value('$categoryName','$description','$currentDate')");
            if ($query) {
                $message ='<div style="color:green">Asset Category Created Successfully!</div>';
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
    $que=mysqli_query($con,"select * from assetscategory_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM assetscategory_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">Asset Category Deleted Successfully!</div>';
        }
    }
}

//all branch

?>