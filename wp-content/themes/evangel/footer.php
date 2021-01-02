<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


	<footer id="footer">
		
	<div class="container-fluid greyfooter">
		<div class="container ">
			<div class="footer_top">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="footer_title1">
						Stay In Touch With Our Updates
					</div>
					<div class="footer_subscription">
						<?php echo do_shortcode ('[contact-form-7 id="61" title="footer_subscription"]') ?>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="footer_title2">
						Follow Us						
					</div>
					<div class="">
						<?php dynamic_sidebar( 'sidebar-9' ); ?>
					</div>	
				</div>
			</div>
		</div>
	</div>		
	
	<div class="container-fluid violetfooter">
		<div class="container ">
			<?php
				$defaults = array(
				'theme_location'  => '',
				'menu'            => 'footermenu',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => ' ',
				'menu_id'         => 'footer_menu',
				'echo'            => true,
				'before'          => '',
				'fallback_cb'     => 'wp_page_menu',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
				);
				wp_nav_menu( $defaults );
		?>	
		</div>
	</div>	
	
	
		<div class="container-fluid violetfooter">
			<div class="container ">
				<!--<div class="col-md-12 col-sm-12">
					</?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>-->
				<div class="col-md-12 col-sm-12 col-xs-12 footmail">
						<?php dynamic_sidebar( 'sidebar-6' ); ?>

						<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>	
			</div>
		</div>	
		
		<div class="container-fluid violetfooter">
			<div class="container ">
				<div class="footer_fsc">
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
				</div>
			</div>
		</div>	
			
	</footer>


<?php wp_footer(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c386f6f361b3372892f9ca2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>


 