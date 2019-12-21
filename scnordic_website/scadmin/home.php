<?php include_once('../connection.php');?>
<?php include_once('header.php');?>


<?php 
	
	if(!(isset($_SESSION['siteadmin']['id'])))
	{
		if (headers_sent())
		{
		echo "<script> window.location.assign('" . BASE_ADMIN_URL_NEW . "'); </script>";
		}
		else
		{
		header('Location: ' . BASE_ADMIN_URL_NEW . "");
		}
    }
?>


<?php 
	switch(@$_GET['page'])
	{
		  
		  /*************admin user management*******/		  
		  
		   case "users":
		   include "admin-user-management/users.php" ; 
		   break;
		   
		   case "roles":
		   include "admin-user-management/roles.php" ; 
		   break;
		   
		   case "useradd":
		   include "admin-user-management/useradd.php" ; 
		   break;
		   
		   case "useredit":
		   include "admin-user-management/useredit.php" ; 
		   break;
		   
		   case "roleadd":
		   include "admin-user-management/role_add.php" ; 
		   break;
		   
		   case "role-edit":
		   include "admin-user-management/role-edit.php" ; 
		   break;
		   
		  /*************admin user management*******/	
		  
		  
		  
		  /*************admin user management*******/	
		
			case "blog-list":
			include "blog/blog-list.php" ; 
			break;

			case "blog-add":
			include "blog/blog-add.php" ; 
			break;
		   
		  
		   
		  /*************admin user management*******/
		
		
		
				  
		  /*************admin user management*******/	
		
			case "contact":
			include "blog/contact.php" ; 
			break;


			case "newsletter":
			include "blog/newsletter.php" ; 
			break;

		   
		  /*************admin user management*******/
		
			
			
		   case "test":
		   include "query_management/test.php" ; 
		   break;
			   
		  
		   default:
		   include "blog/blog-list.php" ;
		   break;
			
	
	
	}
	?>    
	
<?php include_once('footer.php');?>