<?php

/*

Template Name: Shipping
 
*/


get_header(); ?>
<script>
    $(document).ready(function(){
        $(".orig" ).attr('placeholder', 'Search By Title | Author | ISBN');
    });
</script>
<div class="container-fluid crumbsbg">
	<div class="container">
		<div class="dynamic_crumbs">
			<?php echo do_shortcode('[simple_crumbs root="Home" /]') ?>
		</div>
	</div>
</div>	
	
<div class="container-fluid ">
	<div class="container form_class">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
	</div>
	</div>
<?php get_footer(); ?>
