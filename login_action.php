<?php

include('class/Assets.php');

$object = new Assets;

if(isset($_POST["email_address"]))
{
	sleep(2);
	$error = '';
	$url = '';
	$data = array(
		':email_address'	=>	$_POST["email_address"]
	);

	$object->query = "
		SELECT * FROM admin_tbl 
		WHERE emailAddress = :email_address
	";

	$object->execute($data);

	$total_row = $object->row_count();

	if($total_row == 0)
	{
		$object->query = "
			SELECT * FROM branchusers_tbl 
			WHERE emailAddress = :email_address
		";
		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div style="color:red">Invalid Email Address/Password</div>';
		}
		else
		{
			$result = $object->statement_result();

			foreach($result as $row)
			{
                if($_POST["password"] == $row["password"])
                {
                    $_SESSION['admin_id'] = $row['id'];
                    $_SESSION['type'] = 'Branch_User';
                    $url = $object->base_url . 'branchusers/dashboard.php';
                }
                else
                {
                    $error = '<div style="color:red">Invalid Email Address/Password</div>';
                }
				
			}
		}
	}
	else
	{
		$result = $object->statement_result();
		foreach($result as $row)
		{
			if($_POST["password"] == $row["password"])
			{
				$_SESSION['admin_id'] = $row['id'];
				$_SESSION['type'] = 'Admin';
				$url = $object->base_url . 'admin/dashboard.php';
			}
			else
			{
				$error = '<div style="color:red">Invalid Email Address/Password</div>';
			}
		}
	}

	$output = array(
		'error'		=>	$error,
		'url'		=>	$url
	);

	echo json_encode($output);
}

?>