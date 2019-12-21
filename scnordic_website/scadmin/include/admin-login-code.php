<?php
include ('../../connection.php');
 
	 if(isset($_POST['loginbtn']))
	 {
				
		
				$email=$_POST['adminemail'];
				$password=md5($_POST['adminpassword']);
				$q="SELECT * from users WHERE email='$email' and password='$password'";
		
		
		
		if($result=mysqli_query($con,$q))
		{  
		
			
			$num=mysqli_num_rows($result);
		
			
			if($num==1)
			{
				$row=mysqli_fetch_assoc($result);
				
				//print_r($row);
				//die();
				
				$_SESSION['siteadmin']['id']=$row['id'];
				$_SESSION['siteadmin']['username']=$row['username'];
				$_SESSION['siteadmin']['role']=$row['role'];
				$_SESSION['siteadmin']['u_mob']=$row['u_mob'];
				
				
			}
			else
			{
				  $_SESSION['error'] =  "Email OR Password is incorrect.";
				
				   if (headers_sent())
					{
					echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "'); </script>";
					}
					else
					{
					header('Location: ' . BASE_ADMIN_URL_NEW . "");
					}
			}
		}
		else
		{
			$_SESSION['error'] =   mysql_error();
			
			     if (headers_sent())
					{
					echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "'); </script>";
					}
					else
					{
					header('Location: ' . BASE_ADMIN_URL_NEW . "");
					}
			
		}
		
		
	}
	
	
	
	if((isset($_SESSION['siteadmin']['id'])))
	{
		if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php'); </script>";
		    }
	  	   else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php");
		    }
	}
	
	
?>