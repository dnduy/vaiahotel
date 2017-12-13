<?php
/**
  * Template Name: Contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vaiahotel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<maidivn id="main" class="site-main">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.5702422751415!2d108.33333030938795!3d15.879168955843214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420dd68454c885%3A0xbbfda559405edf95!2sVaia+Hotel+Hoi+An!5e0!3m2!1svi!2sth!4v1511685234970" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
					 

				<div class="entry-content">
				<?php the_content( $more_link_text = null, $strip_teaser = false );?>		
					
					

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
