<?php 


require_once "../connection.php"; 
include_once ('../function.php');
//include_once ("../phpmailer/class.phpmailer.php");


	  $p_id = $_REQUEST['p_id'] ;
	  $action = $_REQUEST['action'];
	 
	
	


	switch($action)
	{
		
		 
		  case "userdelete":
		
		   $sql = "DELETE FROM  users  WHERE  id = '".$p_id."'";
		   
		   
			
			if(mysqli_query($con,$sql)==TRUE)
			{
				$_SESSION['success'] = 'Deleted Successfully.';
			}
			else
			{
				$_SESSION['error'] = mysqli_error();
			
			}
			
				if(headers_sent()) 
				{
				 echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php?page=users'); </script>";
				}
				else
				{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php?page=users');
				}
			
		
		break;
		
		
		
		
		 case "roledelete":
		
		   $sql = "DELETE FROM  role  WHERE  role_id = '".$p_id."'";
			
			if(mysqli_query($con,$sql)==TRUE)
			{
				$_SESSION['success'] = 'Deleted Successfully.';
			}
			else
			{
				$_SESSION['error'] = mysqli_error();
			
			}
			
				if(headers_sent()) 
				{
				 echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php?page=roles'); </script>";
				}
				else
				{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php?page=roles');
				}
			
		
		break;
		
		
		
		
		
		
		 case "query_delete":
		
		    $sql = "DELETE FROM  blog  WHERE  b_id = '".$p_id."' ";
			
              $val = mysqli_query($con,$sql);
		   
		      $row = mysqli_affected_rows($con); 
		   
		   
		        if($row==TRUE)
				{	
				echo $_SESSION['success'] = 'Deleted Successfully.';
				}
				else
				{
				
				echo $_SESSION['error'] = "Could not deleted".mysqli_error();

				}
				
		
			
				if(headers_sent()) 
				{
				 echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php?page=blog-list'); </script>";
				}
				else
				{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php?page=blog-list');
				}
			
			
		
		  break;
		
		




		
		
		
		 case "contact_delete":
		
		    $sql = "DELETE FROM  contact  WHERE  c_id = '".$p_id."' ";
			
              $val = mysqli_query($con,$sql);
		   
		      $row = mysqli_affected_rows($con); 
		   
		   
		        if($row==TRUE)
				{	
				echo $_SESSION['success'] = 'Deleted Successfully.';
				}
				else
				{
				
				echo $_SESSION['error'] = "Could not deleted".mysqli_error();

				}
				
		
			
				if(headers_sent()) 
				{
				 echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php?page=contact'); </script>";
				}
				else
				{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php?page=contact');
				}
			
			
		
		  break;
		


		
		 case "newsletter_delete":
		
		    $sql = "DELETE FROM  newsletter  WHERE  n_id = '".$p_id."' ";
			
              $val = mysqli_query($con,$sql);
		   
		      $row = mysqli_affected_rows($con); 
		   
		   
		        if($row==TRUE)
				{	
				echo $_SESSION['success'] = 'Deleted Successfully.';
				}
				else
				{
				
				echo $_SESSION['error'] = "Could not deleted".mysqli_error();

				}
				
		
			
				if(headers_sent()) 
				{
				 echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php?page=newsletter'); </script>";
				}
				else
				{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php?page=newsletter');
				}
			
		  break;
		
		
		
		default:
		
			if(headers_sent() ) {
					echo "<script> window.location.assign('".BASE_ADMIN_URL_NEW."home.php'); </script>";
				}else{
					header('Location: '.BASE_ADMIN_URL_NEW.'home.php');
				}
		
		break;


	}
		

?>