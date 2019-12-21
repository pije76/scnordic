<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");


	
//$con=mysqli_connect("localhost","kundan12345","kundan12345","sc_nordic_website") or die('Database connection issue'); // Server DB connection

$con = mysqli_connect("localhost","root","","sc_nordic_website") or die('Sorry, we are under maintenance');// Local DB connection


//echo "Sorry, we are under maintenance !!!!!";
//die();

########################### BASE URL  	########################### 



/***************When there is Case of HTTPS and all************/
		
		// if ($_SERVER['HTTPS'] = "on") 
		// {  
		// $site_url = "https://".$_SERVER['HTTP_HOST']."/";

		// }
		// else
		// {
		// $site_url = "http://".$_SERVER['HTTP_HOST']."/";

		// }
		
/***************When there is Case of HTTPS and all************/


    
   // $site_url = "https://".$_SERVER['HTTP_HOST']."/"; //when server is on root DND



    // $site_url = "https://".$_SERVER['HTTP_HOST']."/kundan/projects/scnordic_website/"; //when Sub folder is Home directory DND
	 
        
	//$site_url = "http://".$_SERVER['HTTP_HOST']."/kundan_php7/completed_projects_php7/scnordic_website_php7/"; //when Sub folder is Home directory DND  NOTE- Notice you don't need to use HTTPS use only http 
	 
	 
	 $site_url = "http://".$_SERVER['HTTP_HOST']."/kundan_php7/completed_projects_php7/scnordic_website_php7/scnordic_website/"; //when Sub folder is Home directory DND  NOTE- Notice you don't need to use HTTPS use only http 
		
        
/*--------------------------Server paths------------------------*/
	define('ROOT', $_SERVER['DOCUMENT_ROOT']. '/') ;  // document path while upload on server
	define('BASEURL', $site_url); // base url for front
	define('BASE_ADMIN_URL_NEW', BASEURL.'scadmin/');  // base url for admin New
	/*--------------------------Server paths------------------------*/

	
	
	
// echo BASEURL;
//  echo ROOT;
//  echo BASE_ADMIN_URL;
// echo BASE_ADMIN_URL_NEW;
   
   
?>



