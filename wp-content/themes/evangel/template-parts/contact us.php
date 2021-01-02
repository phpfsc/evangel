<?php

/*

Template Name: contact-us
 
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
	<div class="container contactus_page">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="col-md-12 contactus_heading">Enquiry Form</div>
			<?php echo do_shortcode( '[contact-form-7 id="87" title="Contact Us"]' ); ?>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="col-md-12 contactus_heading">Get In Touch With Us</div>
			<div class="contact_touch">
				 <?php dynamic_sidebar('sidebar-10');?>
			</div>			 
		</div>
	</div>
</div>	

	
<?php get_footer(); ?>
