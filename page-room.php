<?php
/**
  * Template Name: Room childs page
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
			<div class="about-page container">
				<div class="col-md-12"> <h2 class="title text-center"><?php the_title( ); ?></h2> </div>
				<?php
		if ( have_posts() ) :


			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					 

					<div class="entry-content col-md-12">
						<div class="col-md-5"> 
							<div>
							<?php echo get_the_post_thumbnail( $post, $size = 'post-thumbnail', $attr = '' ) ?>
							</div>
							
						</div>

					
						<?php  ?>
						<div class="col-md-7 ">
							<div class="except-room text-justify"><?php the_excerpt(); ?>
								<div id="reservation-button-wrapper" class="clearfix"><a  href="http://vaiahotel.com/reservation/" class="btn  btn-primary reservation-button image-replace" title="Booking Now">Booking Now</a></div>

							</div>
							
							<div>
								<?php // $key="mykey"; echo get_post_meta($post->ID, 'short_code_gallery'); ?>
								<?php    $slide =  get_post_custom_values('short_code_gallery'); 
										echo do_shortcode( $slide[0]); ?>
										<?php // echo $slide[0]; ?>
							</div>
						</div>
						<div class="col-md-12">
							<?php the_content( $more_link_text = null, $strip_teaser = false ) ?>

						</div>

					</div><!-- .entry-content -->

					
				</article> 
	<?php

			endwhile;
 
 

		endif; ?>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
