<?php
include_once ('../../../connection.php');
//echo "hi";
// if form is submitteds
if(isset($_POST["save"])==true)
{    

		$username = $_POST['username'];
		$u_mob = $_POST['u_mob'];
		$email = $_POST['email'];
		$password= (md5($_POST['password']));
		$role_id = $_POST['role_id'];
		
		$sql1 = mysqli_query($con,"SELECT id FROM users WHERE email = '".$email."' OR u_mob = '".$u_mob."' ");
		
		if (mysqli_num_rows($sql1) > 0)
		{
			$_SESSION['error'] = 'User already exists with entered email or Mobile No.';
		}
		else
		
		{
			
		 $sql  =  'insert into users (username,u_mob,email, password, role_id)values("'.$username.'","'.$u_mob.'","'.$email.'","'.$password.'","'.$role_id.'")';
		 
		       if (mysqli_query($con,$sql) == TRUE)
				{
					$_SESSION['success'] = 'User Added successfully';
				}
				else
				{
					$_SESSION['error'] = mysqli_error();
				}
		
		}
		
		        if (headers_sent())
				{
				echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=useradd'); </script>";
				}
				else
				{
				header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=useradd");

				}

}

?>
