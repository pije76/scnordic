<?php 
$sql111 = "Select * from contact ORDER BY created_date DESC " ;
$result = mysqli_query($con, $sql111) ;

?>


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Contact List
          
          </h1>
       
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
		   <div class="col-xs-12">
		  <div class="box">
                <div class="box-header">
				<button id="export" class="btn btn-info pull-right">Export Excel</button>
				
				<div class="col-md-6  col-md-offset-3 ">				  
					<?php if(isset($_SESSION['success']) ) { ?>
					<div class="alert alert-success alert_center_new_text" ><?php echo $_SESSION['success']; ?></div>
					<?php unset($_SESSION['success']); } ?>
					<?php if(isset($_SESSION['error']) ) { ?>
					<div class="alert alert-danger alert_center_new_text" ><?php echo $_SESSION['error']; ?></div>
					<?php unset($_SESSION['error']); } ?>
				</div>
				
				
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					<td>S.NO.</td>
					<th>Action</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Date</th>
					</tr>
					</thead>
                    <tbody>
                      	<?php $i= 1; while($row = mysqli_fetch_array($result)) { ?>
                      <tr>
							<td><?php echo $i ?></td>
							<td><a href="<?php echo BASE_ADMIN_URL_NEW ;?>masterprocess.php?action=contact_delete&p_id=<?php echo $row['c_id']; ?>" class="badge btn-danger btn-sm delete"  role="button" title="Delete" name="delete" data-toggle="tooltip">
							<i class="fa fa-trash"></i>
							</a>
							</td>
							<td><?php echo $row['c_name']; ?></td>
							<td><?php echo $row['c_phone']; ?></td>	
							<td><?php echo $row['c_email']; ?></td>			
							<td><?php echo date('d M, Y', strtotime($row['created_date'])); ?></td>
						
							
							
						
                      </tr>
					  <?php $i++; } ?>
					   
                    </tbody>

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

<script src="<?php echo BASE_ADMIN_URL_NEW ;?>js/table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#example1").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "Export" //do not include extension
    });
    });

</script>