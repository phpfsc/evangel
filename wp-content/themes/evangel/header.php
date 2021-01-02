<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
		
	
	
	
	<?php endif; ?>
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/css/lecker_style.css" rel="stylesheet"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet"> 
	
	 	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" ></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

	<script type="text/javascript">


    $(document).ready(function() {
     
      $("#owl-demo1").owlCarousel({
		loop:true, 
		autoWidth:true,
		items: 1,
		  itemsDesktop : [1199,1],
		autoplay:true,
		responsiveClass: true,
		dots: false,
        autoPlay: 10000, //Set AutoPlay to 3 seconds
		center:true,
		margin:150,
		nav:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
			],
		responsive:{
        0:{
             margin:80,
			  nav:false,
        },	
                 321:{
             margin:200, nav:false,
        },

		 376:{
             margin:200, nav:false,
        },
		 481:{
             margin:200, nav:false,
        },
        768:{
           nav:true,margin:200,
        },
        992:{
           margin:80,
        },
		1200:{
           margin:150,
		   
        }
    }	
      });
     
    });


</script>
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
		$(".carousel").swipe({

		  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');

		  },
		  allowPageScroll:"vertical"

		});

        });    
</script> 


<script type="text/javascript">
	function ValidationEvent(){
		var phoneno = /^\d{10}$/;
        var nams = /^[a-zA-Z\s]+$/;
		  var numbers = /^[0-9]+$/;
		var re = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}/;
		
		if(document.formfill.fullname.value==""){
      		alert("Full Name is required. Please check it and select again.");
      		document.formfill.fullname.focus();
      		return false;
      	}
			
		if(!nams.test(document.formfill.fullname.value)){
      	alert("Full name is required in proper format. Please check it and enter again.");
      		document.formfill.fullname.focus();
      		return false;
      	}
		
		if(document.formfill.designation.value==""){
      		alert("designation is required. Please check it and select again.");
      		document.formfill.designation.focus();
      		return false;
      	}
      	
      	if(!nams.test(document.formfill.designation.value)){
      	alert("Your Designation is required in proper format. Please check it and enter again.");
      		document.formfill.designation.focus();
      		return false;
      	}
		
		if(document.formfill.address.value==""){
      		alert("Your Address is required. Please check it and enter again.");
      		document.formfill.address.focus();
      		return false;
      	}
		 	
      	if(document.formfill.contact.value==""){
      		alert("Please enter your 10 digit Mobile Number");
      		document.formfill.contact.focus();
      		return false;
      	}
		
	    if(!phoneno.test(document.formfill.contact.value)){
         alert("Please enter your 10 digit Mobile Number");
        document.formfill.contact.focus();
        return false;
	    }
		
		if(document.formfill.email.value==""){
      		alert("Your Email Address is required. Please check it and enter again.");
      		document.formfill.email.focus();
      		return false;
      	}
			if(!re.test(document.formfill.email.value)){
			alert("Please check your email ID and enter again.");
      		document.formfill.email.focus();
      		return false;
      	}
		
		if(document.formfill.title.value==""){
      		alert("Title of book is required. Please check it and enter again.");
      		document.formfill.title.focus();
      		return false;
      	}
	
		if(document.formfill.pages.value==""){
      		alert("Number of pages is required. Please check it and enter again.");
      		document.formfill.pages.focus();
      		return false;
      	}
		if(!numbers.test(document.formfill.pages.value)){
			alert("Please check your Number of pages and enter again.");
      		document.formfill.pages.focus();
      		return false;
      	}
		
		if(document.formfill.illustrations.value==""){
      		alert("Number of illustrations is required. Please check it and enter again.");
      		document.formfill.illustrations.focus();
      		return false;
      	}
		if(!numbers.test(document.formfill.illustrations.value)){
			alert("Please check your Number of illustrations and enter again.");
      		document.formfill.illustrations.focus();
      		return false;
      	}
		
		if(document.formfill.photographs.value==""){
      		alert("Number of photographs is required. Please check it and enter again.");
      		document.formfill.photographs.focus();
      		return false;
      	}
		if(!numbers.test(document.formfill.photographs.value)){
			alert("Please check your Number of photographs and enter again.");
      		document.formfill.photographs.focus();
      		return false;
      	}
		
		
		
		
		return(true);
      	
    }
  
  </script>
  
  <script>
		jQuery("document").ready(function($){
		var nav = $('.menunav_animated');
			$(window).scroll(function () {
				if ($(this).scrollTop() >100) {
					nav.addClass("f-nav-animated");
				} else {
					nav.removeClass("f-nav-animated");
				}
			});
		});
  </script>
  
   <script>
		jQuery("document").ready(function($){
		var nav = $('.menunav');
			$(window).scroll(function () {
				if ($(this).scrollTop() >50) {
					nav.addClass("f-nav");
				} else {
					nav.removeClass("f-nav");
				}
			});
		});
  </script>
  <meta name="google-site-verification" content="d9hLHg2k8WjlCDpoW-IhYd8rRToDJs_AQoxuJp1n8KY" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132126925-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132126925-1');
</script>

<!-- Default Statcounter code for Evangelpublications.com
http://www.evangelpublications.com/ -->
<script type="text/javascript">
var sc_project=11926011; 
var sc_invisible=1; 
var sc_security="a622a453"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11926011/0/a622a453/1/" alt="Web
Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->


	<?php wp_head(); ?>
</head>

<body class="woocommerce">
   
		<header >
		<div class="container-fluid topheader paddingleftright">
			<div class="container paddingleftright botpadding">
			
				<div class="row padding1024">
                    <div class="col-md-3 col-sm-3 responsive_menu">
						<a href="<?php echo site_url();?>"><img src ="<?php echo get_template_directory_uri(); ?>/images/Evengel-logo.png"></a>
						
					</div>
					<div class="col-md-4 col-sm-4 paddingleftright responsive_menu">
						<!--<?php dynamic_sidebar( 'sidebar-4' ); ?>-->
						
					</div>	
					
					<div class="col-md-5 col-sm-5 col-xs-10">
						<div class= "header-options dropdown_mobile">
						    <?php global $current_user; wp_get_current_user(); ?>
                            <?php if ( is_user_logged_in() ) {  
                             echo '<div class="myname"><span>Hello </span>: ' . $current_user->user_firstname .  '  | </div>';  } 
                            else { } ?>
                           
							<!--<<a class="hvr-pop" href="</?php echo site_url();?>/wishlist/">Wishlist</a>
							<a class="hvr-pop" href="</?php echo site_url();?>/checkout/">Checkout</a>-->
							<?php if ( is_user_logged_in() ) { ?>
							<a class="hvr-pop" href="<?php echo site_url();?>/my-account/">My Account</a>
								<a class="hvr-pop" href="<?php echo wp_logout_url('my-account'); ?>">Logout</a>
							<?php } ?>
							<?php if (!is_user_logged_in() ) {?>
								<a class="hvr-pop" href="<?php echo site_url();?>/login'?action=login">Login</a>
								<a class="hvr-pop" href="<?php echo site_url();?>/register'?action=register">Register</a>
							<?php } ?>
						</div>
						
						<div class="mycart dropdown_mobile">
							<ul class="cartcount">
								<li>
									<div class="mycarthover">
									 
                                        <div class="col-md-5 col-sm-12 col-xs-12 onlycart">
											<a class="cart-contents " href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your cart' ); ?>">
													
												<span id="me" >Your Cart</span>
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												
												<span class="subtotal"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
											</a>
											<div class="header-quickcart" >
											
												<?php
													woocommerce_mini_cart(); ?>
											</div>
										</div>
										<div class="col-md-7 oursearch1">
											<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
										</div>
									</div>		
								</li>
							</ul>
						</div>	
				</div>
				
			</div>	
		</div>
		
		<div class="container-fluid paddingleftright responsive_menu menunav">
			<div class="container paddingleftright widthhundred">
				<div class="col-md-12 paddingleftright">
					<nav class = "navbar navbar-default " role = "navigation">
							<div class = "navbar-header">					
								<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
									<span class = "sr-only">Toggle navigation</span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
								</button>
							</div>
							<div class = "collapse navbar-collapse" id = "example-navbar-collapse">
								<?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'main-menu',
								'container'       => 'div ',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'nav navbar-nav ',
								'menu_id'         => 'menu',
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
							
						</nav>
				</div>
			</div>
		</div>	
		
		<div class="display_mobile menunav_animated animated_menu">
		<div class="container-fluid " >
			<div class="col-sm-12 container ">
				<div class="">
					<a class="lec_logo" href="<?php echo site_url();?>"><img src ="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
				</div>
				<div class="drop_menu_class">
							
							<div class="mycart">
								<ul class="cartcount">
									<li>
										<div class="mycarthover">
											<div class="onlycart">
												<a class="cart-contents1 " href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your cart' ); ?>">
													
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>
													
													<span id="no"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
												</a>
												<div class="header-quickcart1" >
												
													<?php
														woocommerce_mini_cart(); ?>
												</div>
											</div>
										</div>		
									</li>
								</ul>
							</div>	
							
							
							<div class="wishlist_count">
                                    <a href="<?php echo site_url();?>/wishlist"><i class="fa fa-heart" aria-hidden="true"></i>
                                    <?php $wishlist_count = YITH_WCWL()->count_products();?>
                                        <span class=""><?php echo $wishlist_count; ?></span> 
				                    </a>
                             </div>

							
							 <div class="user_options">
                                    <div class="user_title">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="user_dropdown">
                                        <a class="" href="<?php echo site_url();?>/my-account/">My Account</a>
												<a class="" href="<?php echo site_url();?>/checkout/">Chekout</a>
												<?php if ( is_user_logged_in() ) { ?>
													<a class="" href="<?php echo wp_logout_url(); ?>">Logout</a>
												<?php } ?>
												<?php if (!is_user_logged_in() ) {?>
													<a class="" href="<?php echo site_url();?>/login'?action=login">Login</a>
													<a class="" href="<?php echo site_url();?>/register'?action=register">Register</a>
												<?php } ?>
                                    </div>	
							</div>			
						
				</div>
				
				
				
				<nav class = "navbar navbar-default " role = "navigation">
							<div class = "navbar-header">					
								<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse1">
									<span class = "sr-only">Toggle navigation</span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
									<span class = "icon-bar"></span>
								</button>
							</div>
							<div class = "collapse navbar-collapse" id = "example-navbar-collapse1">
								<?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'main-menu',
								'container'       => 'div ',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'nav navbar-nav ',
								'menu_id'         => 'menu',
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
							
						</nav>
				
				
				
				
				
				
				
				
			</div>
			
		</div>
	
	<!--
	<script src="<?php echo get_template_directory_uri(); ?>/js/lecker_library.js"></script> 
	<script src="<?php echo get_template_directory_uri(); ?>/js/lecker_script.js"></script>
	-->
	</div>
			
		</header>