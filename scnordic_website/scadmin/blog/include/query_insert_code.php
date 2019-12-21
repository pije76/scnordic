<?php 

include_once ('../../../connection.php');

?>
 
 
 

<?php
	if(isset($_POST["save"])==true)
	 {  
		
	 $current_date_time = date("Y-m-d H:i:s", strtotime($_POST['query_created_date']));
		
		//die();
		
	
		$query_name    = stripslashes($_POST['query_name']);
	 	$query_name   = mysqli_real_escape_string($con,$query_name);
		
		$query_email   = stripslashes($_POST['query_email']);
	 	$query_email  = mysqli_real_escape_string($con,$query_email);
		
		$query_phone   = stripslashes($_POST['query_phone']);
	 	$query_phone  = mysqli_real_escape_string($con,$query_phone);
		
		$query_watsapp   = stripslashes($_POST['query_watsapp']);
	 	$query_watsapp  = mysqli_real_escape_string($con,$query_watsapp);

		$query_lead_source   = stripslashes($_POST['query_lead_source']);
	 	$query_lead_source  = mysqli_real_escape_string($con,$query_lead_source);
		
	    $query_remark   = stripslashes($_POST['query_remark']);
	 	$query_remark  = mysqli_real_escape_string($con,$query_remark);
		
	    $query_address   = stripslashes($_POST['query_address']);
	 	$query_address  = mysqli_real_escape_string($con,$query_address);
	
		
		

		 $sql  =  'insert into query_management (query_name,query_email,query_phone,query_watsapp,query_lead_source,query_remark,query_lead_created_date,query_address)  

		values

		("'.$query_name.'","'.$query_email.'","'.$query_phone.'","'.$query_watsapp.'","'.$query_lead_source.'","'.$query_remark.'","'.$current_date_time.'","'.$query_address.'")';
	
	
		//die();

		if(mysqli_query($con,$sql)==TRUE)
		{		
		$_SESSION['success'] = 'Added succcessfully';

		} 

		else
		{		
		$_SESSION['error'] = mysqli_error();
		}
		

			if (headers_sent())
			{
			echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=query_list_pending'); </script>";
			}
			else
			{
			header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=query_list_pending");

			}
		


}


?>