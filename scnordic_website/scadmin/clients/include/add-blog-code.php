<?php 

require_once "../../../connection.php"; 

if(isset($_POST["save"])==true)
{  
 
	//print_r($_POST); 

	 $title = $_POST['title'] ;
	$description = $_POST['editor1'];
	$b_featured_image = '';
	echo $created_date = date("Y-m-d H:i:s", time());
	
	//die();
	
	
			/**************** image upload end *****************/
		   
			if(isset($_FILES["b_featured_image"]) && $_FILES["b_featured_image"]['name'] != '')
			{
				$imagefolderpath = '../../../images/blog/';
				$validextensions = array("jpeg", "jpg", "png", "JPG","PNG","JPEG");
				$random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) ;
				$temporary = explode(".", $_FILES["b_featured_image"]["name"]);
				$file_extension = end($temporary);
				
				if ((($_FILES["b_featured_image"]["type"] == "image/png") || ($_FILES["b_featured_image"]["type"] == "image/jpg") || ($_FILES["b_featured_image"]["type"] == "image/jpeg")
				) && in_array($file_extension, $validextensions)) 
				{
				
					
					$filename = $random_string.time().'.'.$file_extension;
					$sourcePath = $_FILES['b_featured_image']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = $imagefolderpath.$filename; // Target path where file is to be stored
					
					if(move_uploaded_file($sourcePath,$targetPath) ) 
					{
					
						$b_featured_image = $filename;
					}
					else
					{
					
						$_SESSION['error'] = 'Image not upload';
						
					}
				
				
				}else{
					
						$_SESSION['error'] = 'Image not valid';
						
					}



			}
			else
			{
					
						 $_SESSION['error'] = 'Image not founnd';
						
		    }			
			/**************** image upload end *****************/
		
		
		$q ="INSERT INTO  blog  SET  b_title= '".$title."', b_description = '".addslashes($description)."',  b_featured_image = '".$b_featured_image."', b_publish_date = '".$created_date."'";
		
		
		if($result=mysqli_query($con,$q))
		{  
				
		 $_SESSION['success'] = 'Saved Successfully';
	
		}
		else
		{
			echo $_SESSION['error'] =   mysql_error();
		}
		


		        if (headers_sent())
				{
				echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "home.php?page=blog-list'); </script>";
				}
				else
				{
				header('Location: ' . BASE_ADMIN_URL_NEW . "home.php?page=blog-list");

				}


	
}

?>