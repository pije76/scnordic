	 <section id="blog" class="jumbotron">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Case stories</h3>
          <p>SC Noric's vision is that we will be a vital partner for our customers in their efforts to keep</p>
        </div>
         
          <div class="card-deck">

				<?php 
				$sql_blog = "Select * from blog ORDER BY b_publish_date DESC LIMIT 3";
				$result_bolg = mysqli_query($con, $sql_blog) ;
				?>
				
				<?php $i= 1; while($row_blog = mysqli_fetch_array($result_bolg)) {

				$image2 = $row_blog['b_featured_image'];

				?>
				
              <div class="card">
				<?php if( $image2 != '' && @getimagesize(BASEURL.'images/blog/'.$image2 ) ) { ?>

				<img src="<?php echo BASEURL ;?>images/blog/<?php echo $image2 ;?>" alt="" class="card-img-top"/>
				
				<?php }else{ ?>
				<img src="<?php echo BASEURL ;?>images/blog/dummy-images.jpg" alt="ScNordic" class="img-thumbnail" height="150" width="100%"/>

				<?php } ?>
                  <div class="card-body">
                      <h6 class="card-title pt-4" style="font-weight:bold;"><?php echo $row_blog['b_title']; ?></h6>
                          <p class="title-para"><?php echo substr($row_blog['b_description'], 0, 150); ?>... </p>
                          <a href="<?php echo BASEURL ;?>case-studies.php?b_id=<?php echo $row_blog['b_id']; ?>" class="btn btn-success">Read more</a>
                      <p class="card-text"><small class="text-muted">Last updated on <?php echo date('d M, Y', strtotime($row_blog['b_publish_date'])); ?></small></p>
                  </div>
              </div>
				<?php $i++; } ?>

			  
			  
          </div>
		  
      </div>
  </section>