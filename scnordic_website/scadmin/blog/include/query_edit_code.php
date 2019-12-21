<?php 

include_once ('../../../connection.php');

include_once ('../../../function.php');

 ?>

<?php


if(isset($_POST["save"])==true)
{    
		$id= $_POST["id"];
		
		
		
	    $query_lead_created_by   = stripslashes($_POST['query_lead_created_by']);
	 	$query_lead_created_by  = mysqli_real_escape_string($con,$query_lead_created_by);
	
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
		
		
		
		$query_status   = stripslashes($_POST['query_status']);
	 	$query_status  = mysqli_real_escape_string($con,$query_status);
		
		
		$query_sub_status   = stripslashes($_POST['query_sub_status']);
	 	$query_sub_status  = mysqli_real_escape_string($con,$query_sub_status);
		
		$query_address   = stripslashes($_POST['query_address']);
	 	$query_address  = mysqli_real_escape_string($con,$query_address);
		
		
		 $query_follow_up_date = $_POST['query_follow_up_date'];
		 
	
		
 $sql = "UPDATE query_management SET query_name='$query_name' ,query_email='$query_email' ,query_phone='$query_phone',query_watsapp='$query_watsapp',query_lead_source='$query_lead_source',query_remark='$query_remark',query_status='$query_status',query_sub_status='$query_sub_status',query_follow_up_date='$query_follow_up_date',query_address='$query_address' WHERE query_id= '$id' ";
		  
		  
		   if(mysqli_query($con,$sql)==TRUE)
			{
				 
			 $_SESSION['success'] = 'Updated successfully';
				
			} 
			else 
			{
				$_SESSION['error'] = mysqli_error();
				
			} 
           


			if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=query_edit&id=".$id ."'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=query_edit&id=".$id ."");
		    }
		  
	

}





?>
