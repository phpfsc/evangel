<?php

/*

Template Name: thankyou
 
*/


get_header(); ?>
<style>
    .thankpage {
    float: left;
    width: 100%;
    text-align: center;margin-bottom:45px;
}
.thankpage p {
    font-size: 30px;
    font-family: 'Playfair Display', serif;
}
.container-fluid.background_color {
    background-color: #e1f0f8;
}
</style>
<div class="container-fluid thankcolor">
	<div class="container">
		<div class="dynamic_crumbs">
			<?php echo do_shortcode('[simple_crumbs root="Home" /]') ?>
		</div>
	</div>
</div>	
<div class="container-fluid background_color">
	<div class="container">
		<div class="thankpage">
		    <img src ="<?php echo get_template_directory_uri(); ?>/images/thank.png">
		    <p>Thank you for enquiry. <br>We will get back to you soon.</p>
		</div>	
	</div>
</div>	

	
<?php get_footer(); ?>
