<?php include_once('../connection.php');?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>S.C. Nordic | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  </head>
  
  <body class="login-page">
    <div class="login-box">
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>
			<div class="row">
			
			<?php if(isset($_SESSION['error']) ) 
			{ ?>
           <div class="alert alert-danger" style="color:#fff; padding:10px; text-align:center;">
		  <?php echo $_SESSION['error']; ?>
		   </div>
          <?php unset($_SESSION['error']); } ?> 
			
			</div>
        <form action="<?php echo BASE_ADMIN_URL_NEW; ?>include/admin-login-code.php" method="post" id="admin_login" name="admin_login">
          <div class="form-group has-feedback">
		  
		   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <input type="email" class="form-control required email" placeholder="Email" name="adminemail">
            
          </div>
		 
          <div class="form-group has-feedback">
		     <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <input type="password" class="form-control required" placeholder="Password" name="adminpassword">
           
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck" style="margin-top:0px;">			
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
				<input type="submit" value="Log In"  class="btn btn-primary btn-block btn-flat" name="loginbtn"/>
             
            </div><!-- /.col -->
          </div>
        </form>

       <!-- <a href="#">I forgot my password</a><br>-->
      

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box 
	

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	  <script src="dist/js/jquery.validate.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
	
	
	
	 <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
		$("#admin_login").validate();
	
	});
	</script>
	
  </body>
</html>
