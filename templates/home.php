<div class="container">
	<div class="row">
		<div class="span12">
    	    <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <?php 
                      $counter=0;
                      while ( have_rows('image_home') ) : the_row(); 
                    ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo($counter); ?>" class="<?php if($counter==0){echo('active');} ?>"></li>
                    
                    <?php 
                      $counter++;
                      endwhile; 
                    ?>  
                </ol>
                   
                <!-- Carousel items -->
                <div class="carousel-inner">
                
                <?php
                  $counter=0;
                  while ( have_rows('image_home') ) : the_row(); 
                ?>

                <div class="item <?php if($counter==0){echo('active');} ?>">
                	<div class="row-fluid">
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="<?php    the_sub_field('image1'); ?>" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="<?php the_sub_field('image2'); ?>" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="<?php the_sub_field('image3'); ?>" alt="Image" style="max-width:100%;" /></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="<?php the_sub_field('image4'); ?>" alt="Image" style="max-width:100%;" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                
                  <?php 
                    $counter++;
                    endwhile; 
                  ?>
                 
                </div><!--/carousel-inner-->
                <!-- 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div><!--/myCarousel-->
                 
            </div><!--/well-->   
		</div>
	</div>
</div>