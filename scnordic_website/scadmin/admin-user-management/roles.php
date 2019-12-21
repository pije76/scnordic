<?php 
$sql = "SELECT * from role" ;
$result = mysqli_query($con,$sql);

?>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Roles
			<small>List</small>
          </h1>
         <ol class="breadcrumb">
              <li>
			  <a href="<?php echo BASE_ADMIN_URL_NEW ;?>home.php?page=roleadd" class="btn btn-warning btn-sm button_color_white_new"><span>
			 Add Role</span>
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
                <div class="box-body table-responsive	">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
						<tr>
						<th>SNo</th>
						<th>Role_Title_Name_Details</th>
						<th>Action</th>
						<th>Status</th>
						<th>Access</th>                  
						
						</tr>
                    </thead>
                    <tbody>
                      	<?php $i= 1; while($row = mysqli_fetch_array($result)) { ?>
							<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $row['title']; ?> </td>
							
							<td><a href="<?php echo BASE_ADMIN_URL_NEW ;?>home.php?page=role-edit&role_id=<?php echo $row['role_id']; ?>" class="badge btn-info btn-sm" role="button" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
							
							<a href="<?php echo BASE_ADMIN_URL_NEW ;?>masterprocess.php?action=roledelete&p_id=<?php echo $row['role_id']; ?>" class="badge btn-danger btn-sm delete"  role="button" title="Delete" name="delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
							</td>
							
							
							<td><?php echo $row['status']; ?></td>
							<td><?php echo $row['accesses']; ?></td>
						
							
							</tr>
							
					  <?php $i++; } ?>
					   
                    </tbody>
                    <tfoot>
                     <tr>
					    <th>SNo</th>
						<th>Role_Title_Name_Details</th>
						<th>Action</th>
						<th>Status</th>
						<th>Access</th>
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
	