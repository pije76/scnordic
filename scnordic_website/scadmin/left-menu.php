<?php $sqli = mysqli_query($con,"SELECT U.id, R.title AS 'title', R.status AS 'status', R.accesses AS 'accesses', R.role_id AS 'role_id' from users U JOIN role R ON U.role_id=R.role_id where id=$id");?>

<?php $row = mysqli_fetch_assoc($sqli);  ?>
<?php $p=$row['accesses'];
$q=explode(',',$p);	

//print_r($p);

?>

<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
           
				   
			<li>
			   <a href="#">
			   <span>Case Study</span></a>
				
				
				<ul class="treeview-menu">
				
				
                <li><a href="<?php echo BASE_ADMIN_URL_NEW; ?>home.php?page=blog-list">
				Case Study List</a>
				</li>
				
								
				<li><a href="<?php echo BASE_ADMIN_URL_NEW; ?>home.php?page=blog-add">
				Add Case Study</a>
				</li>
				
                </ul>
				
			</li>
			

		   
			<li>
			   <a href="#">
			   <span>Contact</span></a>
				
				
				<ul class="treeview-menu">
				
                <li><a href="<?php echo BASE_ADMIN_URL_NEW; ?>home.php?page=contact">
				Contact List</a>
				</li>
		
                </ul>
				
			</li>
			
	

			<li>
			   <a href="#">
				<span>Newsletter</span></a>
				
				
				<ul class="treeview-menu">
				
                <li><a href="<?php echo BASE_ADMIN_URL_NEW; ?>home.php?page=newsletter">
				Newsletter List</a>
				</li>
		
                </ul>
				
			</li>


			<li>
			   <a href="logout.php">
			   <span>Log out</span></a>
				
			</li>
			
			
			

			
        
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>