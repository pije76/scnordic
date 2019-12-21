<?php include_once('connection.php');?>

<?php include_once('include/header.php');?>

<?php
	
	$b_id = $_GET['b_id'] ;
	
	$query = "SELECT  * FROM blog  Where b_id ='".$b_id."' " ;
	$result = mysqli_query($con,$query);
	

	
?>


<?php while($row = mysqli_fetch_assoc($result)) { 


$b_id     = $row['b_id'];
$b_title     = $row['b_title'];
$b_status     = $row['b_status'];
$b_publish_date = date('d M, Y', strtotime($row['b_publish_date'])) ;
$t_pro_pic = $row['b_featured_image'] ;



?>

<section id="call-to-action" class="wow fadeIn" style="margin-top:6%;">
         <div class="section-header">
          <h3>Case Study</h3>
        
        </div>
</section><!-- #call-to-action -->


  <div class="container" style="margin-top:6%; margin-bottom:5%;">

          <div class="row portfolio-container">

          <div class="col-lg-8 col-md-8 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
			<h4><a href="#"><span style="color:#000;"><b><?php echo $b_title; ?></b></span></a></h4>
              <figure>
			  
			    <?php if( $t_pro_pic != '' && @getimagesize(BASEURL.'images/blog/'.$t_pro_pic ) ) { ?>
				
                <img src="<?php echo BASEURL ;?>images/blog/<?php echo $t_pro_pic ;?>" class="img-fluid" alt="">
				
               <?php } ?>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                
				   <span><?php echo $row['b_description'] ;?></span>
                <!-- <p>Read More</p>-->
              </div>
            </div>
          </div>




          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
       
		    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Mark Twink</h3>
            <h4>Client</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Jhon Wick</h3>
            <h4>Client</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jack Buffey</h3>
            <h4>Client</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->
		
          </div>



        </div>
	   
	   

	</div>

<?php  }?>
   

<?php include_once('include/footer.php');?>