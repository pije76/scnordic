<?php 
include_once('../connection.php'); ?>



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
	
	
	
	
	$id = $_SESSION['siteadmin']['id'];
	
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>S.C. Nordic ! Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font online Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
   <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicframework.css">
	
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    
    <!-- Theme style -->
	
	
	  
    <!-- Theme style -->
	
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
	
	<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
	
	  <script src="<?php echo BASE_ADMIN_URL_NEW.'js/jquery.shorten.js'; ?>"></script>

	 <link rel="stylesheet" href="css/roomsoom_admin_style.css">
    <!-- Admin custome style by kundan kapoor -->
    
	
	
<link rel="stylesheet" type="text/css" href="<?php echo BASE_ADMIN_URL_NEW; ?>css/bootstrap-datepicker.standalone.min.css">
<script src="<?php echo BASE_ADMIN_URL_NEW; ?>js/bootstrap-datepicker.js"></script> 

<script src="<?php echo BASE_ADMIN_URL_NEW; ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_ADMIN_URL_NEW; ?>plugins/timepicker/bootstrap-timepicker.min.css" />

	
	  
	
  </head>
  
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Admin</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Admin</span>-->
        </a>

     
      </header>
	  
<style>
.blink{
		
		color: rgb (0, 137, 226);
		animation: blink 1s infinite;
	 }
	 
	 @keyframes blink{
		0%{opacity: 1;}
		75%{opacity: 1;}
		76%{ opacity: 0;}
		100%{opacity: 0;}
	 }

</style>	  
	  <?php include_once "left-menu.php" ; ?>