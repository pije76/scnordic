<?php

include_once ('../../../connection.php');


if(isset($_POST['role_submit']))
	{

	$role_id = $_POST['role_id'];
	$title = $_POST['title'];
	$status = $_POST['status'];
	$choice = $_POST['accesses'];

		if(empty($title))
			{
				$_SESSION['error']="Please enter role name.";
			}
		elseif(empty($status))
			{
				$_SESSION['error']="Please enter status.";
			}
		elseif(empty($choice))
			{
				$_SESSION['error']="Please select alteast one resource.";
			}
		else {

				$sql = mysqli_query($con,"SELECT role_id FROM role WHERE title = '$title'");

				if (mysqli_num_rows($sql) > 0)
				{
					$_SESSION['error'] = 'Role already added with the same name';
				}
				else
				{

			$arrlength = count($choice);

			$x = 0;

			while($x < $arrlength) {

			$sql="INSERT into role (title, status, accesses) VALUES ('$title', '$status', '$choice')";

			$x++;
			}
				if (mysqli_query($con,$sql) == TRUE)
				{
					$role_id = mysqli_insert_id($con);
	                $_SESSION['success'] = 'Role added successfully';
					if (headers_sent())
		    {
		    echo "<script> window.location.assign('" .BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."");
		   }
				}
				else
				{
	                $_SESSION['error'] = mysqli_error();
					if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."");
		   }
				}

			}
		}
}

if(isset($_POST['role_submit_edit']) == TRUE)
	{
	
	$role_id = $_POST['role_id'];
	$title = $_POST['title'];
	$status = $_POST['status'];
	$choice = $_POST['accesses'];

		if(empty($title))
			{
				$_SESSION['error']="Please enter role name.";
			}
		elseif(empty($status))
			{
				$_SESSION['error']="Please enter status.";
			}
		elseif(empty($choice))
			{
				$_SESSION['error']="Please select alteast one resource.";
			}
		else {

			$sql = mysqli_query("SELECT * FROM role WHERE title = '$title' && role_id != '$role_id' ");

				if (mysqli_num_rows($con,$sql) > 0)
				{
					$_SESSION['error'] = 'Role already added with the same name';
				}
				else
				{

			$arrlength = count($choice);

			$x = 0;

			while($x < $arrlength) {

				 $sql="UPDATE role SET title = '$title', status = '$status', accesses = '$choice' WHERE role_id='$role_id'";
			$x++;
			}
				if (mysqli_query($con,$sql) == TRUE)
				{
	                $_SESSION['success'] = 'Role updated successfully';
					if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."");
		   }
				}
				else
				{
	                $_SESSION['error'] = mysqli_error();
					if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=role-edit&role_id=".$role_id."");
		   }
				}

			}
		}

}
  			


?>