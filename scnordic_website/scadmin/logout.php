<?php

include_once('../connection.php'); 
//setcookie("uid","",time()-60);
if (isset($_COOKIE['uid'])) {
    unset($_COOKIE['uid']);
    setcookie('uid', null, -1, '/');
}
unset($_SESSION['siteadmin']);

		if(headers_sent()) 
		{
		echo "<script> window.location.assign('index.php'); </script>";
		}
		else
		{
		header('Location: index.php');
		}


?>
