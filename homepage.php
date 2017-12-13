<?php
/**
  * Template Name: home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaiahotel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		

			<div id="home-slider">
				<?php 
				    //echo do_shortcode("[metaslider id=64]"); 
				?>
				<?php 
    echo do_shortcode("[metaslider id=110]"); 
?>
			</div>
			<div id="booking">
				<div class="container ">
				<div class="caption col-md-2"> <h3 class="title"> Reservation</h3></div>
				<div class="col-md-10 booking-content"><section id="hbe-bws-wrapper-widget-code"></section><link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/search-wdg.css" />
				<script type="text/javascript" src="//book.securebookings.net/js/widget.search.js"></script><script type="text/javascript" src="//book.securebookings.net/searchWidgetCustomize?lang=en&id=d43fbf04-82b0-4e83-9e4c-c8dc83958e1e&ajax=true"></script>
 </div>
				
				</div>
			</div>
			
			<div id="home-icon">
				<div class="container"> 
					<div class="row home-icon">
						<!-- <div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon1.png"></div>	
							<span class="vaia-icon-text">Swimming Pools</span> 
							<h3 class="vaia-icon-title">EXERCISE</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon2.png"></div>	
							<span class="vaia-icon-text">Face masks</span> 
							<h3 class="vaia-icon-title">SKIN CARE</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon3.png"></div>	
							<span class="vaia-icon-text">Hot oil</span> 
							<h3 class="vaia-icon-title">TREATMENT</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon4.png"></div>	
							<span class="vaia-icon-text">Jacuzzi Tub</span> 
							<h3 class="vaia-icon-title">RELAXATION</h3>			
						</div>
						
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon5.png"></div>	
							<span class="vaia-icon-text">Herbal Remedy</span> 
							<h3 class="vaia-icon-title">HEALTHY</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/index-icon6.png"></div>	
							<span class="vaia-icon-text">Face masks</span> 
							<h3 class="vaia-icon-title">MASSAGES</h3>			
						</div> -->

						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_bicycle.png"></div>	
							<!-- <span class="vaia-icon-text">Swimming Pools</span>  -->
							<h3 class="vaia-icon-title">BICYCLE HIRE</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_discount.png"></div>	
							<!-- <span class="vaia-icon-text">Face masks</span>  -->
							<h3 class="vaia-icon-title">DISCOUNT ROOM RATE</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_eat.png"></div>	
							<!-- <span class="vaia-icon-text">Hot oil</span>  -->
							<h3 class="vaia-icon-title">EAT & DRINK</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_tour.png"></div>	
							<!-- <span class="vaia-icon-text">Jacuzzi Tub</span>  -->
							<h3 class="vaia-icon-title">TOUR DESK</h3>			
						</div>
						
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_transport.png"></div>	
							<!-- <span class="vaia-icon-text">Herbal Remedy</span>  -->
							<h3 class="vaia-icon-title">TRANSPORTATION</h3>			
						</div>
						<div class="col-md-2 col-lg-2 col-xs-12 text-center">
							<div class="vaia-icon"> <img src="<?php echo bloginfo( 'template_directory' ); ?>/images/icon_yaly"></div>	
							<!-- <span class="vaia-icon-text">Face masks</span>  -->
							<h3 class="vaia-icon-title">YALY COUTURE</h3>			
						</div>

					</div>
					
				</div>
			</div>
			<!-- end #home-icon -->
			<div id="about-us">
				<div class="container top-about">
					<div class="row">
					 	<?php get_about(6); ?>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<?php 
							$array_special = array(
							    'page_01'=>8,
								'page_02' =>20,
								'page_03'=>22
								 );
						 ?>
						<?php boxcontent_receation($array_special); ?>
					</div>
				</div>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
