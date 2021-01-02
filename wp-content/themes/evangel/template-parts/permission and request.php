<?php

/*

Template Name: permission
 
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
	<div class="container">
		<div class="form_title">Permission & Request</div>
		<div class="form_subtitle">If you need to use any article, image, figure, illustration, matter etc. from our printed book(s), you are requested to fill the following particulars:</div>
	</div>
</div>	
	
<div class="container-fluid ">
	<div class="container">
		<div class="permission_form">
			<?php echo do_shortcode( '[contact-form-7 id="88" title="permission and request"]' ); ?>
		</div>
	</div>
</div>

	
<?php get_footer(); ?>
