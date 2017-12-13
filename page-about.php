<?php
/**
  * Template Name: About page
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
				    echo do_shortcode("[metaslider id=64]"); 
				?>
			</div>
			<div class="about-page container">
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
					 

					<div class="entry-content">
						<div class="col-md-6">
								<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vaiahotel' ),
								'after'  => '</div>',
							) );
						?>
						</div>
						<div class="col-md-6">
							<?php echo get_the_post_thumbnail( $post_id, 'large' ); ?>
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
