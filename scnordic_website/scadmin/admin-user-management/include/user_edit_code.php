<?php
include_once ('../../../connection.php');


if(isset($_POST["save"])==true)
{    
	    
		$id  = $_POST['id']; 
		$username = $_POST['username'];
		$u_mob = $_POST['u_mob'];
		$email = $_POST['email'];
	//	$password= (md5($_POST['password']));
		$role_id = $_POST['title'];
		
	
	
       $sql1 = mysqli_query($con,"SELECT * FROM users WHERE  id != '".$id."' AND ( email = '".$email."' OR u_mob = '".$u_mob."') ");
	   
	  
	   
	   
		if (mysqli_num_rows($sql1) > 0)	
		{
			$_SESSION['error'] = 'User already exists with entered Email or Mobile No';
		}
		else
		{
			
	      // $sql = 'UPDATE users SET username = "'.$username.'", u_mob = "'.$u_mob.'", email = "'.$email.'", password = "'.$password.'", role_id = "'.$role_id.'" WHERE id = "'.$id.'" ';
		   
		   $sql = 'UPDATE users SET username = "'.$username.'", u_mob = "'.$u_mob.'", email = "'.$email.'", role_id = "'.$role_id.'" WHERE id = "'.$id.'" ';
		   
		        
				if (mysqli_query($con,$sql) == TRUE)
				{
					$_SESSION['success'] = 'User updated successfully';
				}
				else
				{
					$_SESSION['error'] = mysqli_error();
				}
				
			
			
		}
		
		
			
				if (headers_sent())
				{
				echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=useredit&id=".$id ."'); </script>";
				}
				else
				{
				header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=useredit&id=".$id ."");
				}
			
	
	
}


?>
