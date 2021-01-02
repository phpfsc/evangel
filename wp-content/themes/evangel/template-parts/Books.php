<?php

/*

Template Name: books
 
*/


get_header(); ?>
<div class="container-fluid crumbsbg">
	<div class="container">
		<div class="dynamic_crumbs">
			<?php echo do_shortcode('[simple_crumbs root="Home" /]') ?>
		</div>
	</div>
</div>	
<div class="container-fluid background_color">
	<div class="container">
		<div class="col-md-12 col-sm-12 customwoocommerce_page">
		
			<?php echo do_shortcode('[product_categories]') ?>
		</div>		
	</div>
</div>	

	
<?php get_footer(); ?>
