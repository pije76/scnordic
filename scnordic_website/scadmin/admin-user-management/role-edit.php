<?php 
//error_reporting(1);
if(isset($_GET['role_id']) && $_GET['role_id'] > 0 )
  {

$role_id = $_GET['role_id'];    

$sql = "SELECT * from role WHERE role_id=$role_id" ;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
 
$role_id = $row['role_id'];
$title1 = $row['title'];
$status = $row['status'];
$choice=$row['accesses'];
}
?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Role
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
					

					<form class="" id="role_add_frm" role="form" method="post" action="<?php echo BASE_ADMIN_URL_NEW ;?>admin-user-management/include/access_role.php" enctype="multipart/form-data">
					
				 <input type="hidden" id="role_id" name="role_id" class="form-control" value="<?php echo $row['role_id']; ?> ">

                        <div class="row form-group">
                          <div class="col-md-6">
                           <label for="title">Role Name*</label>
						   
                  <input type="text" id="title" name="title" class="form-control required" placeholder="Role Name" value="<?php echo $title1;?>" />
							
							
                          </div>
                          <div class="col-md-6">
                            <label for="status">Status* </label>
					<select name="status" class="form-control required" >
					<option value="">Select Status</option>
						<option value="Active" <?php if($row['status'] == 'Active'){ echo 'selected'; } ?> >Enable</option>
						<option value="In-Active" <?php if($row['status'] == 'In-Active'){ echo 'selected'; } ?>>Disable</option>
					</select>
                          </div>
                        </div>
						
						
						
						
						
						  <div class="row form-group">
                          <div class="col-md-12">
                            <label for="accesses">Accesses* </label>
					<input type="text" id="accesses" name="accesses" class="form-control disabled" style="background-color: #eee;" placeholder="Accesses" value="<?php echo $y = $row['accesses']; $x= explode(',',$y)?>">
                          </div>
                        </div>
                       
    
                       
               
                          
				<div class="row form-group">
                    <div class="col-md-12">
					  <table class="table table-responsive">
					
					  <tr>
						<td>
						<input type="checkbox" name="check_role" class="test" value="dashboard" <?php if (in_array('dashboard', $x)){ echo 'checked';} ?>> Dashboard
						</td>	
						
						<td>
						  <input type="checkbox" name="check_role" class="test" value="administration" <?php if(in_array('administration', $x)) {echo 'checked';} ?>> Administration
						</td>
						
						<td>
						<input type="checkbox" name="check_role" class="test" value="tenant" <?php if(in_array('tenant', $x)) {echo 'checked';} ?>> Tenant
						</td>
						   
						<td>
						 <input type="checkbox" name="check_role" class="test" value="owner" <?php if(in_array('owner', $x)) {echo 'checked';} ?>> Owner
						 </td>
						 
						
						<td>
						<input type="checkbox" name="check_role" class="test" value="properties" <?php if(in_array('properties', $x)) {echo 'checked';} ?>> Properties
						</td>
						
						<td>
						 <input type="checkbox" name="check_role" class="test" value="company" <?php if(in_array('company', $x)) {echo 'checked';} ?>> Company
						 </td>
					 
					  </tr>
					  
					  
				
					 
					 
					 
					 <tr>
					 <td><input type="checkbox" name="check_role" class="test" value="rentpaid" <?php if(in_array('rentpaid', $x)) {echo 'checked';} ?>> Rent Paid
					 </td>
					
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="schedulevisit" <?php if(in_array('schedulevisit', $x)) {echo 'checked';} ?>> Schedule Visit
					 </td>
				
					
					<td>
					<input type="checkbox" name="check_role" class="test" value="enquiry" <?php if(in_array('enquiry', $x)) {echo 'checked';} ?>> Enquiry
					</td>
					
					<td>
					<input type="checkbox" name="check_role" class="test" value="kyc" <?php if(in_array('kyc', $x)) {echo 'checked';} ?>> kyc
					</td>

					<td>
					<input type="checkbox" name="check_role" class="test" value="complaint" <?php if(in_array('complaint', $x)) {echo 'checked';} ?>> Complaint
					</td>
					
					<td>
					<input type="checkbox" name="check_role" class="test" value="ownerLead" <?php if(in_array('ownerLead', $x)) {echo 'checked';} ?>> Owner Lead
					</td>	
					
					
				  </tr>
				  
				  
				  
				  
				  
				   <tr>
					
					 <td><input type="checkbox" name="check_role" class="test" value="Query Management" <?php if(in_array('Query Management', $x)) {echo 'checked';} ?>> Query Management
					 </td>
					
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="Field Executive" <?php if(in_array('Field Executive', $x)) {echo 'checked';} ?>> Field Executive
					 </td>
					 
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="User" <?php if(in_array('User', $x)) {echo 'checked';} ?>> User
					 </td>
					 
					 
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="Complaint Attendant" <?php if(in_array('Complaint Attendant', $x)) {echo 'checked';} ?>> Complaint Attendant
					 </td>
					 
					 
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="Delete" <?php if(in_array('Delete', $x)) {echo 'checked';} ?>> Delete
					 </td>
					 
					
				    </tr>
					
						
					<tr>
					
					 <td><input type="checkbox" name="check_role" class="test" value="Tenant Management" <?php if(in_array('Tenant Management', $x)) {echo 'checked';} ?>> Tenant Management
					 </td>
					
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="House Management" <?php if(in_array('House Management', $x)) {echo 'checked';} ?>> House Management
					 </td>
					 
					 
					 
					 <td>
					 <input type="checkbox" name="check_role" class="test" value="rentsecurityreport" <?php if(in_array('rentsecurityreport', $x)) {echo 'checked';} ?>> Rent/Secuirty Report
					 </td>
					 
				
					 
					
				    </tr>

					 
			</table>
			</div>
           </div>
                                         
                   
                          <div class="row form-group">
                            <div class="col-md-6">
                               <input type="submit" name="role_submit_edit" value="Submit" id="rnole_submit" class="btn btn-primary text-uppercase sign-up"/>
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

	$(document).ready(function() {
		$('#role_add_frm').validate( );
	} );
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".test").click(function(){
            var favorite = [];
            $.each($("input[name='check_role']:checked"), function(){            
                favorite.push($(this).val());
            });
            //alert(favorite.join(", "));

            $('#accesses').val(favorite.join(","));

        });
    });
</script>