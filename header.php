<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaiahotel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	 <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel='stylesheet' id='sb_instagram_icons-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' type='text/css' media='all' /> 
	<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vaiahotel' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="cshero-header-inner">
			<div id="cshero-header-wrapper">
				<div id="cshero-header">
					<div class="container">
						<div class="row ">
							<div id="cshero-header-logo">
								<a href="#"><img src="<?php echo bloginfo( 'template_directory' ); ?>/images/logo-transparent.png"></a>
							</div> 

							<div id="cshero-header-navigation" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="cshero-header-navigation-inner clearfix">
									<div id="cshero-header-navigation-left" class="cshero-header-navigation">
										<!-- left nav -->
										<?php //dynamic_sidebar('left-menu'); ?>
										
										<nav id="site-navigation" class="main-navigation" role="navigation">

											<?php 
												wp_nav_menu( array(
													'theme_location' => 'left-menu',
													'menu_id'        => 'left-menu',
												) );
										 	?>
										</nav>

									</div>
									<div id="cshero-header-navigation-right" class="cshero-header-navigation">
										<!-- righ nav -->
										<?php //dynamic_sidebar( 'right-menu' ); ?>
										<nav id="site-navigation" class="main-navigation" role="navigation">
												<?php 
												wp_nav_menu( array(
													'theme_location' => 'right-menu',
													'menu_id'        => 'right-menu',
												) );
										 	?>
										</nav>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
 

		 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
