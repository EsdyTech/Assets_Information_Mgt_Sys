<?php
include('../includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        $assetId = $_POST["assetId"];
        $amount = $_POST["amount"];
        $quantity = $_POST["quantity"];
        $assetCategoryId = $_POST["assetCategoryId"];
        $dateSold = $_POST["dateSold"];

        $que=mysqli_query($con,"select * from assets_tbl where id ='$assetId'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $qtyAvailable = $ret['quantityRem'];
            if($quantity > $qtyAvailable){               
                $message ='<div style="color:red">Quantity of Asset is less than the Amount to be Released/Sold!</div>';
            }
            else{

                $query=mysqli_query($con,"insert into soldassests_tbl(assetId,assetCategoryId,quantitySold,amountSold,dateSold,dateCreated) 
                value('$assetId','$assetCategoryId','$quantity','$amount','$dateSold','$currentDate')");
                if ($query) {

                    $newQty = $qtyAvailable - $quantity;
                    $ret=mysqli_query($con,"update assets_tbl set quantityRem='$newQty' where id='$assetId'");
                    if($ret){
                        $message ='<div style="color:green">Asset Released/Sold Created Successfully!</div>';
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
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from soldassests_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){
        $assetId = $ret['assetId'];
        $qtySold = $ret['quantitySold'];

        $query = mysqli_query($con,"DELETE FROM soldassests_tbl WHERE id ='$delid'");
        if ($query) {

            $que2=mysqli_query($con,"select * from assets_tbl where id ='$assetId'");
            $ret2=mysqli_fetch_array($que2);
    
            if($ret2){
      
                $qtyRem = $ret2['quantityRem'];
                $newQty = $qtyRem + $qtySold;
                $ret=mysqli_query($con,"update assets_tbl set quantityRem='$newQty' where id='$assetId'");
                if($ret){
                    $message ='<div style="color:green">Deleted Successfully!</div>';               
                }
                else
                {
                    $message = '<div style="color:red">An Error Occured!</div>';
                }
            }           
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

//all branch

?>