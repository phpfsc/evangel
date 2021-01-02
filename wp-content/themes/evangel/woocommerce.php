<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<script>
    $(document).ready(function(){
        $(".orig" ).attr('placeholder', 'Search By Title | Author | ISBN');
    });
</script>

<div class="container-fluid crumbsbg_woo">
	<div class="container">
		<div class="dynamic_crumbs_woo">
				<?php
					$args = array(
					'delimiter' => '&nbsp;&nbsp;»&nbsp;&nbsp;',
					'before' => '<span class="breadcrumb-title">' . __( '', 'woothemes' ) . '</span>'
					);
				?>
				<?php woocommerce_breadcrumb( $args ); ?>
		</div>
	</div>
</div>	
	

<div class="container-fluid background_color">
	<div class="container">
		<div class="col-md-12 col-sm-12 customwoocommerce_page">
		
			<?php if( is_shop()){ ?>
			<div class="custom_shop">
				<?php woocommerce_content(); ?>
			</div>
			<?php 	} else { ?>	
			<?php woocommerce_content(); ?>
			<?php 	} ?>
		</div>		
	</div>
</div>	



<?php get_footer(); ?>
