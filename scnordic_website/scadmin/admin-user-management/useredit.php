
<?php 
//print_r($_POST);
if(isset($_GET['id']) && $_GET['id'] > 0 )
  {
    $id = $_GET['id'];    

    $sql = "SELECT U.id, U.username, U.u_mob, U.email, U.password, U.user_registered_date, R.title AS 'role', R.status AS 'status', R.role_id AS 'role_id' from users U JOIN role R ON U.role_id=R.role_id WHERE id=$id";

    $result = mysqli_query($con,$sql);
    $profile = mysqli_fetch_assoc($result);     
     
     $title = $profile['role'];
     $username = $profile['username'];
	  $u_mob = $profile['u_mob'];
     $email = $profile['email'];
     $role_id = $profile['role_id'];
     
  // echo   $password = $profile['password'];  

  
   
  }
?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php if(isset($_GET['id']))
	  { ?>
      Edit
      <?php } else {?> 
      Add
      <?php }?> User
      <small>Details</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">      
          <div class="box ">
            <div class=" box-body">
              <div class="row">
                <div class="col-md-12">               
                  <div class="profile-bottom">    
					
						<div class="col-md-6  col-md-offset-3 ">				  
						<?php if(isset($_SESSION['success']) ) { ?>
						<div class="alert alert-success alert_center_new_text" ><?php echo $_SESSION['success']; ?></div>
						<?php unset($_SESSION['success']); } ?>
						<?php if(isset($_SESSION['error']) ) { ?>
						<div class="alert alert-danger alert_center_new_text" ><?php echo $_SESSION['error']; ?></div>
						<?php unset($_SESSION['error']); } ?>
						</div>	

                    <div class="row">
					

					<form class="" id="register-form" role="form" method="post" 
					action="<?php echo BASE_ADMIN_URL_NEW ;?>admin-user-management/include/user_edit_code.php" enctype="multipart/form-data">
					

                        <div class="row form-group">
                          <div class="col-md-6">
                            <label>User Name*</label>
                            <input type="text" id="username" name="username" class="form-control required" placeholder="User Name" value="<?php echo $username;?>">
							
							<input type="hidden" name="id" value="<?php echo $id;?>">
							
                          </div>
                          <div class="col-md-6">
                            <label>Email*</label>
                            <input type="email" id="email" name="email" class="form-control required" placeholder="Email" value="<?php echo $email;?>">
                          </div>
                        </div>
						
						
						
						
						
						  <div class="row form-group">
                          <div class="col-md-6">
                            <label>Phone*</label>
                            <input type="number" id="u_mob" name="u_mob" class="form-control required" placeholder="Phone" value="<?php echo $u_mob;?>">
                          </div>
                          <div class="col-md-6">
                            <label>Status*</label>
							<select class="form-control" id="status" name="status">
							<option value="Active">Active</option>                                                            
							</select>
                          </div>
                        </div>
                       
    
                       
               
                          
						   <div class="row form-group">
                            <div class="col-md-6">
									
									<label>Permissions*</label>
									  
									<?php $get = mysqli_query($con,"SELECT distinct title, role_id from role"); ?>
									
									
									<select name="title" class="form-control">
									
									<?php while($row = mysqli_fetch_array($get)) { ?>
									  <option value="<?php echo $row['role_id']; ?>" <?php if($row['title'] == $title) { echo 'selected="selected"'; } ?>> <?php echo $row['title']; ?></option>
									<?php }?>
									
									</select>
									
                                </div>
								
								
						   <!--
						   <div class="col-md-6">
                            <label>Password*</label> 
                            <input type="password" id="password" name="password" class="form-control required" placeholder="password" value="<?php echo $password;?>">
                           </div>
						   -->
							
                          </div>
                                         
                   
                          <div class="row form-group">
                            <div class="col-md-6">
                               <input type="submit" name="save" value="Edit" id="save" class="btn btn-danger text-uppercase sign-up"/>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->              
              </div><!-- /.col -->
            </div><!-- /.row -->
          </section><!-- /.content --> 
      </div><!-- wrapper -->
	  
	  
	  <script>

  // When the browser is ready...

  $(function() {
   // Setup form validation on the #register-form element
    $("#register-form").validate({    
        rules: {
            username: "required",
            
		
		password : {
			minlength: 6       
		},
		
		u_mob :{
			maxlength : 10,
			minlength : 10
			},
      
		cpass: {
        equalTo : "#password"
            }
        },

        // Specify the validation error messages

        messages: {

            username: "Please enter your first name",            
            
      password: 
      {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters"
            },
      
       
        }
    });

  });

  </script>
<!-- jQuery Form Validation code -->
