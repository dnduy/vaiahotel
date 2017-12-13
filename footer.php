<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaiahotel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info text-center" >
				<div class="row col-md-10 col-md-offset-1">
					<div class="col-md-8 col-xs-12 footer-info"> 
						Vaia Boutique Hotel Hoian - # 489, Cua Dai Road – Hoi An City, Vietnam | info@vaiahotel.com - (+84) 5103 916 499 
					</div>
					<div class="col-md-4 col-xs-12 social">
						<div class="col-md-3 col-xs-3 col-sm-3 icon-social"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/fb.png"></a></div>
						<div class="col-md-3 col-xs-3 col-sm-3 icon-social"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/g.png"></a></div>
						<div class="col-md-3 col-xs-3 col-sm-3 icon-social"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/tw.png"></a></div>
						<div class="col-md-3 col-xs-3 col-sm-3 icon-social"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/tripadvisor.png"></a></div>
					</div>
				</div>
				
				 
			
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' ', 'vaiahotel' ), 'vaiahotel', '<a class="hide" href="https://duongngocduy.wordpress.com/">dnduy</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
