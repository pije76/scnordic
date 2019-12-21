<?php 
$sql = "SELECT U.id, U.username, U.u_mob, U.email, U.user_registered_date, R.title AS 'role' from users U JOIN role R ON U.role_id=R.role_id";
$result = mysqli_query($con,$sql) ;

?>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
			<small>List</small>
          </h1>
         <ol class="breadcrumb">
              <li>
			  <a href="<?php echo BASE_ADMIN_URL_NEW ;?>home.php?page=useradd" class="btn btn-warning btn-sm button_color_white_new"><span>
			 Add user</span>
			 </a>
			 </td>
			  </li>

          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
		   <div class="col-xs-12">
		  <div class="box">

                <div class="box-header">
				
				<div class="col-md-6  col-md-offset-3 ">				  
					<?php if(isset($_SESSION['success']) ) { ?>
					<div class="alert alert-success alert_center_new_text" ><?php echo $_SESSION['success']; ?></div>
					<?php unset($_SESSION['success']); } ?>
					<?php if(isset($_SESSION['error']) ) { ?>
					<div class="alert alert-danger alert_center_new_text" ><?php echo $_SESSION['error']; ?></div>
					<?php unset($_SESSION['error']); } ?>
				</div>
				
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
						<tr>
						<th>SNo</th>
						<th>Action</th>
						<th>User_Full_Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Role</th>                
						<th>Date</th>
						
						</tr>
                    </thead>
                    <tbody>
                      	<?php $i= 1; while($row = mysqli_fetch_array($result)) { ?>
							
							<tr>
							<td><?php echo $i ?></td>
							
							<td>
							<a href="<?php echo BASE_ADMIN_URL_NEW ;?>home.php?page=useredit&id=<?php echo $row['id']; ?>" class="badge btn-info btn-sm" role="button" title="Edit" data-toggle="tooltip" name='edit'><i class="fa fa-pencil"></i></a> 
							
							<a href="<?php echo BASE_ADMIN_URL_NEW ;?>masterprocess.php?action=userdelete&p_id=<?php echo $row['id']; ?>" class="badge btn-danger btn-sm delete"  role="button" title="Delete" name="delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
							</td>
							
							<td><?php echo $row['username']; ?> </td>
							<td><?php echo $row['u_mob']; ?> </td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['role']; ?></td>
							<td><?php echo date('d M, Y', strtotime($row['user_registered_date'])); ?></td>			
						    
							</tr>
						
					  <?php $i++; } ?>
					   
                    </tbody>
                    <tfoot>
                      <tr>
						<th>SNo</th>
						<th>Action</th>
						<th>User_Full_Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Role</th>                
						<th>Date</th>
						</tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		  
			</div><!-- /.col -->
		  </div><!-- /.row -->
		  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	  
	  
<script type="text/javascript">

$(document).ready(function(){
	
$('.delete').click(function(e)
{
 
    if(confirm("Are you sure you want to delete ?"))
    {
        //alert('navigate!');
    }
    else
    {
        e.preventDefault();
    }
});

      
});

</script>	  
	