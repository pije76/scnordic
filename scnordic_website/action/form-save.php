<?php 
include('../connection.php');

if(isset($_POST['signup_type']))
{
	$current_date_time = date("Y-m-d H:i:s");
	
	if($_POST['signup_type'] == 'contact')
	{
		
		 $sql = "INSERT INTO contact (c_name,c_phone,c_email,c_message,created_date) VALUES ('".$_POST['c_name']."','".$_POST['c_phone']."','".$_POST['c_email']."','".$_POST['c_message']."','$current_date_time')";
		
		
		if(mysqli_query($con,$sql)==TRUE)
		{

			$data = array('status' => 1, 'message' => 'your request has been saved successfully.');
		}
		else
		{
			$data = array('status' => 0, 'message' => mysqli_error());
		}
		  echo json_encode($data);
		
	}
	
	
	if($_POST['signup_type'] == 'newsletter')
	{
		
		$sql = "INSERT INTO newsletter (n_email,created_date) VALUES ('".$_POST['n_email']."','$current_date_time')";
		
		
		if(mysqli_query($con,$sql)==TRUE)
		{

			$data = array('status' => 1, 'message' => 'Saved successfully.');
		}
		else
		{
			$data = array('status' => 0, 'message' => mysqli_error());
		}
		
		  echo json_encode($data);
		
	}

}


 ?>