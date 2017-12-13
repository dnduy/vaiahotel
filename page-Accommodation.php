<?php
/**
  * Template Name: Accommodation page
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
					
					<?php 
					$args = array(
						'post_parent' => get_the_ID(),
						'post_type'   => 'page', 
						//'numberposts' => -1,
						//'post_status' => 'any' 
					);
					$children = get_children( $args ); 
					//print_r($children);
					foreach ($children as $childrens) {	?>
					<?php $page_id = $childrens->ID; ?>
						
						<div class="row">
							<div class="col-md-6 ">
								<?php echo get_the_post_thumbnail( $page_id, '', array( 'class' => 'aligncenter' ) ); ?>
							</div>
							<div class="col-md-6 content-wrapper">
								<div class="content">
									<h3 class="two-lines-title"> <a href="<?php echo get_the_permalink( $page_id ); ?>" title=""> <span><?php echo $childrens->post_title; ?> </span> </a></h3>
									<div class="text-appear on"><p class="description"><?php  echo $childrens->post_excerpt; ?></p></div>
									<div class=""><a class="btn more" href="<?php echo get_the_permalink( $page_id ); ?>" title="Read more"><span>More infomation</span></a></div>
								</div>
								<?php  ?>
							</div>
						</div>

				<?php	}

					 

					?>
					

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
