
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

     <script src="plugins/jquery.validate.js"></script>	
	
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	  
	  <script>
      $(function () {

        $('#example1').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
		  "aLengthMenu": [5,10,20,30,50, 75, 100, 200, 500, 1000,5000,10000,500000,1000000],
		  "iDisplayLength":5
        });
      });
    </script>
    
  </body>
</html>
