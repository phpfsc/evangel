<?php

/*

Template Name: home
 
*/


get_header(second); ?>

<div class="container-fluid paddingleftright">
		<div class="container widthhundred paddingleftright">
			<div class=" homeslider ">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
					<!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
					  </ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					<?php
						$count=1;
						$args = array( 'post_type' => 'slider','posts_per_page' => 30);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<div class="item <?php if($count==1) { ?> active <?php } ?>">
						 <?php echo the_post_thumbnail('full'); ?>
						<div class="carousel-caption Crousel_content">
							<div class="animated 
							<?php if($count==1) { ?> fadeInLeft <?php } ?>
							<?php if($count==2) { ?> bounceInDown <?php } ?>
							<?php if($count==3) { ?> fadeInLeft <?php } ?>
							">
								<div class="container excerpt">
									<?php echo the_excerpt(); ?>	
								</div>			
							</div>
						</div>
					  </div>
					  
					  <?php $count++; endwhile; ?>
					</div>
					
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
  
				</div>
			</div>
		</div>
</div>	

<div class="container-fluid ">
	<div class="container">
		<div class="evangel-publications">
			<!--</?php
				$count=1;
				$args = array( 'post_type' => 'evangel_publications','posts_per_page' => 1);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>-->
			<div class="evangel-publications-title">
					<!--</?php echo the_title(); ?>-->
			</div>
		<!--	<div class="evangel-publications-content">
				<?php echo the_content(); ?>	
			</div>
			</?php $count++; endwhile; ?>-->
		</div>	
	</div>
</div>

	
<?php get_footer(); ?>
