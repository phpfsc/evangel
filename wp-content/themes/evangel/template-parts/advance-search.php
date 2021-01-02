<?php

/*

Template Name: advance search
 
*/


get_header(); ?>
<style>
.advmaindiv {
    float: left;
    width: 100%;
    margin: 3% 0 0% 0;
}
.advmaindiv1 {
    float: left;
    width: 100%;
    margin-bottom: 3%;
}
.advmaindiv2 {
    margin-bottom: 3%;
}
.advtitle {
    font-family: 'Muli', sans-serif;
    color: #ac0aac;
    font-size: 12px;
    font-weight: 600;
}
</style>
<div class="container-fluid crumbsbg">
	<div class="container">
		<div class="dynamic_crumbs">
			<?php echo do_shortcode('[simple_crumbs root="Home" /]') ?>
		</div>
	</div>
</div>	
<div class="container-fluid ">
	<div class="container">
		<div class="form_title">Advance Search</div>
	</div>
</div>			
<div class="container-fluid ">
	<div class="container form_class">
    	<div class="advmaindiv1">
    	<div class="advmaindiv">
            <div class="col-md-4 col-sm-4 colxs-12">
        		<div class="advtitle">Search By Category</div>
        		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        	</div> 
        </div>
    	<div class="advmaindiv">
                <div class="col-md-4 col-sm-4 colxs-12">
            		<div class="advtitle">Search By Keywords</div>
            		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            	</div>
        </div>
    	<div class="advmaindiv">
                <div class="col-md-4 col-sm-4 colxs-12">
            		<div class="advtitle">Search By Editor/Author</div>
            		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            	</div>
            </div>
    		<div class="advmaindiv">
                <div class="col-md-4 col-sm-4 colxs-12">
            		<div class="advtitle">Search By ISBN/ISSN</div>
            		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            	</div>
            </div>
    		<div class="advmaindiv">
                <div class="col-md-4 col-sm-4 colxs-12">
            		<div class="advtitle">Search By Publisher</div>
            		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            	</div>
            </div>
            <div>
        </div>
    	</div>
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
</div>

<?php get_footer(); ?>