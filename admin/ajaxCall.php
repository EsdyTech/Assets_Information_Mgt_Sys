<?php

    include('../includes/dbconnection.php');

    $aid = intval($_GET['aid']);

        $queryss=mysqli_query($con,"select * from assets_tbl where assetCategoryId=".$aid." ORDER BY assetName ASC");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){    
            
        echo ' <div class="row">
        <div class="col-lg-4">
            <label class="login2">Asset : </label>
        </div>
        <div class="col-lg-8">';
        echo '
        <select required name="assetId" class="form-control">';
        echo'<option value="">--Select Asset--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['id'].'" >'.$row['assetId'].' '.$row['assetName'].'</option>';
        }
        echo '</select>';
        echo ' </div>
        </div>';
        }

?>