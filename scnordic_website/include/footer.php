  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo-1.png" alt="" title="" class="mb-3"/>
            <p>S.C. Nordic’s vision: Our clients become increasingly more efficient, as they engage to become smarter consumers, benefiting by participating in a smarter grid.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              ApsSoebyvej 18B <br>
               Hoejslev DK, Denmark 7840<br>
              United States <br>
              <strong>Phone:</strong> +1 5511 11511 50<br>
              <strong>Email:</strong> mb@scnordic.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Join our newsletter to receive monthly updates, offers and information on all S.C.Nordic. Please fill out the form below to be added to our newsletter mailing list to receive valuable information.</p>
            <form action="" id="contact_form_5">
			<input type="hidden" name="signup_type" value="newsletter">
			<div class="alert_message_1" style="color:#18d26e; text-align:center;"></div>
              <input type="email" name="n_email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>S.C.Nordic</strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <!--<script src="lib/jquery/jquery-migrate.min.js"></script>-->
  <script src="<?php echo BASEURL ;?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/easing/easing.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo BASEURL ;?>lib/superfish/superfish.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/wow/wow.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/counterup/counterup.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo BASEURL ;?>lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo BASEURL ;?>js/main.js"></script>
  
  
<!-- jQuery--> 
<script>

  // When the browser is ready...
  $(document).ready(function  () {
		
    // Setup form validation on the #register-form element
    $("#contact_form_5").validate({

		
		rules :{
			 n_email:{
				required:true
			}
		},    
		  submitHandler: function (form) 
		  { 
		  	
		  	 $.ajax({
                 type: "POST",
                 url: "<?php echo BASEURL; ?>action/form-save.php",
                 data: $(form).serialize(),
                 success: function (data) {
                 	var data = $.parseJSON(data);
                 	if(data.status == 1)
                 	{
						//alert("hello");
						
                 		$('.alert_message_1').html('<div class="success-message">'+data.message+'</div>').show().delay(5000).fadeOut();
                 		$("#contact_form_5")[0].reset();
						
                 	}
                 }
             });
          }
    });

  });
  
  </script>
  
  
  </script>

</body>
</html>