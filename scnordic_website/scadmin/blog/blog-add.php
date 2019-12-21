<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			Add Case Study
			</h1>
		
		</section>

        <!-- Main content -->
        <section class="content">

			  <div class="row">
				   <div class="col-xs-12 col-md-12">  
						<div class="">
							   <div class="">
									<form class="" id="register-form" role="form" method="post" action="<?php echo BASE_ADMIN_URL_NEW ;?>blog/include/add-blog-code.php" enctype="multipart/form-data">
										<div class="col-xs-12 col-md-9">
											<div class="box  box-body box-default" >
												<div class=" ">
													<!-- text input -->
													<div class="form-group">
														<div class="box-header">
															<h3 class="box-title">Enter Case Study Title</h3>
														 </div><!-- /.box-header -->
														 <input type="text" id="title" name="title" class="form-control required" placeholder="Enter  Case Study Title">
														 
													</div>										
													<div class="box-header">
													  <h3 class="box-title">Case Study Descripton</h3>
																										
													</div><!-- /.box-header -->
													<div class="box-body pad">
									<textarea id="editor1" name="editor1" rows="20" cols="80"  placeholder="Place some text here" style="resize:none" class="form-control required"></textarea>
													 
													</div>
													
													
												</div>
												
											</div><!-- box -->
											
											
										</div><!-- col-md-9 -->
										
										
										
										<div  class="col-md-3 col-xs-12">
											<div class="box box-info">
												<div class="box-header with-border">
												  <h3 class="box-title">Featured Image</h3>
												</div><!-- /.box-header -->
												<div class="box-body image-holder-1">
												
														<img src=''  id='image-holder'  class='img-responsive center-block required' required /> 
														<p><a href="javascript:void(0);" id="delt_img" style="display: none;">Delete Image</a></p>
													
													<div class="form-group featured_div" >
														
														<input type="file" id="b_featured_image" name="b_featured_image" class="form-control required">
														
													</div>
												</div>
											</div>
										
											<div class="box box-info">
												<div class="box-header with-border">
												  <h3 class="box-title">Publish</h3>
												</div><!-- /.box-header -->
												<div class="box-body">

													<div class="form-group">
												 
														<input type="submit" class="btn btn-info"  name="save" value="Publish">
													</div>
												</div>
												
											</div>
										
										</div>
									
								</form>
								
									
									
							</div><!-- /.box body-->
						</div><!-- /.box -->
					</div><!-- /.box -->
					
					
					
					
				</div><!-- /.col -->
				
			
		</section><!-- /.content --> 
</div><!-- /.row -->





<script>
// When the browser is ready...
  $(function() {
   // Setup form validation on the #register-form element
    $("#register-form").validate({    
        rules: {
            username: "required",
			
			u_mob :{
			maxlength : 10,
			minlength : 10
			},
            
		
		password : {
			minlength: 6       
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






<script>
	$(document).ready(function() {

	  // place this within dom ready function
	  function showpanel() {     
		var str = $("#title").val();
		if(str != '' && str.length > 2){
			var dt = new Date($.now());
			var curr_date = dt.getDate();
			var curr_month = dt.getMonth();
			var curr_year = dt.getFullYear();
			var arch = curr_year+'-'+curr_month+'-'+curr_date ;
			//var str = "Sonic Free Games";
			str = str.replace('\'', '').toLowerCase();
			str = str.replace('\"', '').toLowerCase();
			str = str.replace('\/', '').toLowerCase();
			str = str.replace('?', '').toLowerCase();
			str = str.replace(':', '').toLowerCase();
			str = str.replace(';', '').toLowerCase();
			str = str.replace('@', '').toLowerCase();
			str = str.replace(/\s+/g, '-').toLowerCase();
			// var b_url_path = '<?php echo $site_url; ?>blogs/'+arch+'/'+str+'.html';
			var b_url_path = '<?php echo $site_url; ?>blogs/'+str+'.html';
			$(".b_url_path").html('<label>Blog Url: </label> '+b_url_path+'');
			//$("#b_url_key").val(arch+'/'+str);
				$("#b_url_key").val(str);
			// alert(curr_year+'-'+curr_month+'-'+curr_date);
			
		}
	 }
	<?php if($b_id < 1 ) { ?>
		$("#title").keyup(function(){
			// alert('sdsds');
			 setTimeout(showpanel, 2000);
		});
	 // use setTimeout() to execute
	 // setTimeout(showpanel, 10000);
	 <?php } ?>

		$('#chnfti').click(function(){
			$('.featured_div').toggleClass('hidden');
		
		});
	});
</script>
 
<script type="text/javascript">
function readURL(input) {
	var imgPath = input.value;
	var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	var image_holder = $("#image-holder");
	image_holder.empty();
	if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
		if (typeof(FileReader) != "undefined") {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#image-holder').attr('src', e.target.result);
				$('#delt_img').show();
			}
			image_holder.show();
			reader.readAsDataURL(input.files[0]);
		}else {
		  alert("This browser does not support FileReader.");
		  input.value = null;
		}
	}else {
		alert("Pls select only images");
		input.value = null;
	  }
}

$("#b_featured_image").change(function(){
	readURL(this);
});

$("#del_img").click(function(){
	$("#b_image").html('');
		$("#b_old_image").val('');

});
$("#delt_img").click(function(){
	$('#image-holder').attr('src', '');
	$("#delt_img").hide();
	$('#b_featured_image').val('');
	
});
</script>


<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>

<script>
      $(function () 
	  {
		 CKEDITOR.replace('editor1',
		 {
				resize_enabled : false,
				height: '250',
				resize_minHeight : '300',
				entities_greek : false,
				entities_latin : false,
				uiColor:  '#cccccc',
		 
		 });
       
      });
	  

</script>