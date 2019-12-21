<?php 
$sql111 = "Select * from blog ORDER BY b_publish_date DESC " ;
$result = mysqli_query($con, $sql111) ;

?>


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Case Study List
          
          </h1>
         <ol class="breadcrumb">
              <li>
			  <a href="<?php echo BASE_ADMIN_URL_NEW; ?>home.php?page=blog-add" class="btn btn-warning btn-sm button_color_white_new"><span>
			 Add Case Study</span>
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
					<td>Action</td>
					<th>Title</th>
					<th>Posted_Date</th>
					<th>Status</th>
					</tr>
					</thead>
                    <tbody>
                      	<?php $i= 1; while($row = mysqli_fetch_array($result)) { ?>
                      <tr>
							<td><?php echo $i ?></td>
							<td>
							<!--<a href="<?php echo BASE_ADMIN_URL_NEW ;?>home.php#" class="badge btn-info btn-sm" role="button" title="Edit" data-toggle="tooltip" name='edit'>
							<i class="fa fa-pencil"></i>
							</a>-->
						
							<a href="<?php echo BASE_ADMIN_URL_NEW ;?>masterprocess.php?action=query_delete&p_id=<?php echo $row['b_id']; ?>" class="badge btn-danger btn-sm delete"  role="button" title="Delete" name="delete" data-toggle="tooltip">
							<i class="fa fa-trash"></i>
							</a>
							</td>
							
					
							<td><?php echo $row['b_title']; ?></td>
							<td><?php echo date('d M, Y', strtotime($row['b_publish_date'])); ?></td>
							<td>
							<?php if($row['b_status'] == 'Published' ) { ?>
							<span class="badge btn-success bg-green"><?php echo ucfirst($row['b_status']); ?></span>
							<?php  }else { ?>	
							<span class="badge btn-success bg-red"><?php echo ucfirst($row['b_status']); ?></span>
							<?php } ?>
							</td>
							<td>$room</td>
							
							
						
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