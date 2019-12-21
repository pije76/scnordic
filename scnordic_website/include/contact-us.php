    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>S.C. Solutions Aps, Soebyvej 18B, Hoejslev DK, Denmark, 7840</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+23905200">23 90 52 00</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">mb@scnordic.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
      
          <form action="" method="post" role="form" class="contactForm" id="contact_form_1">
		  
		  <input type="hidden" name="signup_type" value="contact">
		  <div class="alert_message" style="color:#18d26e; text-align:center;"></div>
		  
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="c_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter your name" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
				<input type="text" class="form-control" name="c_phone" id="c_phone" placeholder="Your Contact Number" data-rule="minlen:4" data-msg="Please enter your contact number"/>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="c_email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="c_message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  

  
<!-- jQuery Form Validation code --> 
<script>
  
  // When the browser is ready...
  $(document).ready(function  () {
		
    // Setup form validation on the #register-form element
    $("#contact_form_1").validate({

		
		rules :{
			 c_name:{
				required:true
			}
			, 
			c_phone:{
				required:true
			}, 
			c_email:{
				required:true
			}
			, c_message:{
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
						
                 		$('.alert_message').html('<div class="success-message">'+data.message+'</div>').show().delay(5000).fadeOut();
                 		$("#contact_form_1")[0].reset();
						
                 	}
                 }
             });
          }
    });

  });
  
  </script>

  