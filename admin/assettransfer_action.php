<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        $assetId = $_POST["assetId"];
        $assetCategoryId = $_POST["assetCategoryId"];
        $fromBranchId = $_POST["fromBranchId"];
        $toBranchId = $_POST["toBranchId"];
        $dateTransfered = $_POST["dateTransfered"];

        if( $fromBranchId !=  $toBranchId)
        {
             //if branch moved to is not same as branch to be moved to
                $query=mysqli_query($con,"insert into assetstransfer_tbl(assetId,assetCategoryId,fromBranchId,toBranchId,transferedById,dateTransfered,dateCreated) 
                value('$assetId','$assetCategoryId','$fromBranchId','$toBranchId','$admin_id','$dateTransfered','$currentDate')");
                if ($query) {
    
                    $ret=mysqli_query($con,"update assets_tbl set branchId='$toBranchId' where id='$assetId'");
                    if($ret){
                        $message ='<div style="color:green">Asset Transfered/Moved Successfully!</div>';
                    }
                    else
                    {
                        $message = '<div style="color:red">An Error Occured!--Line 27</div>';
                    }
                }
                else
                {
                    $message = '<div style="color:red">An Error Occured!-- line 32</div>';
                }
        }
        else
        {
            $message = '<div style="color:red">This Asset Already belongs to this Branch!</div>';
        }
        
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from assetstransfer_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $fromBranchId = $ret['fromBranchId'];
        $assetId = $ret['assetId'];

        $rets=mysqli_query($con,"update assets_tbl set branchId='$fromBranchId' where id='$assetId'");
        if($rets){

            $query = mysqli_query($con,"DELETE FROM assetstransfer_tbl WHERE id ='$delid'");
            if ($query) {
                $message ='<div style="color:green">Deleted Successfully!</div>';               
            }
            else
            {
                $message = '<div style="color:red">An Error Occured!</div>';
            }
        }
        else
        {
            $message = '<div style="color:red">An Error Occured!</div>';
        }
       
    }
}

//all branch

?>