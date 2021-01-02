<?php

/*

Template Name: author
 
*/


get_header(); ?>
<script>
    $(document).ready(function(){
        $(".orig" ).attr('placeholder', 'Search By Title | Author | ISBN');
    });
</script>
 <script>
    var uploadField = document.getElementById("file");

    uploadField.onchange = function() {
        if(this.files[0].size > 2097152){
           alert("File is too big!");
           this.value = "";
        };
};
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
		<div class="form_title_join">AUTHOR INVITATION</div>
	</div>
</div>	

<div class="container-fluid ">
	<div class="container form_class">
			
			<?php echo do_shortcode('[contact-form-7 id="60" title="Join as an author"]') ?>
<?php			
			$pdf_media_file = get_field('pdf_file');
	 $pdf_file = wp_get_attachment_url($pdf_media_file);
	 
		?>
		<!--<div class="col-md-12 col-xs-12 downpdf width_resp_400">
		<a href="</?php echo $pdf_media_file; ?>" target="_blank">
		<button type="submit" name="contents" value="" class="single_add_to_cart_button button alt contents width_resp_400">Download Form</button>
		</a>
		</div>-->

	</div>
</div>
	
<?php get_footer(); ?>
