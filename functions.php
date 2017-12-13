<?php
/**
 * vaiahotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vaiahotel
 */

if ( ! function_exists( 'vaiahotel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vaiahotel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vaiahotel, use a find and replace
		 * to change 'vaiahotel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vaiahotel', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'vaiahotel' ),
		) );

		// register left menu 
		register_nav_menus( array('left-menu' => esc_html( 'Left menu','vaiahotel' ), ));
		// register right menu
		register_nav_menus( array('right-menu' => esc_html( 'Right menu' , 'vaiahotel'), ) );
		register_nav_menus(  array('mobile-menu' => esc_html( 'mobile menu' , 'vaiahotel'), ) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vaiahotel_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vaiahotel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vaiahotel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vaiahotel_content_width', 640 );
}
add_action( 'after_setup_theme', 'vaiahotel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vaiahotel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vaiahotel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vaiahotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vaiahotel_widgets_init' );

// left header menu
function vaiahotel_left_menu() {
	register_sidebar( array(
		'name'          => esc_html__( 'left menu', 'vaiahotel' ),
		'id'            => 'left-menu',
		'description'   => esc_html__( 'Add widgets here.', 'vaiahotel' ),
		'before_widget' => '<nav id="%1$s" class="menu %2$s">',
		'after_widget'  => '</nav>',
		
	) );
}
add_action( 'widgets_init', 'vaiahotel_left_menu' );
// right header menu
function vaiahotel_right_menu() {
	register_sidebar( array(
		'name'          => esc_html__( 'right menu', 'vaiahotel' ),
		'id'            => 'right-menu',
		'description'   => esc_html__( 'Add widgets here.', 'vaiahotel' ),
		'before_widget' => '<nav id="%1$s" class="menu %2$s">',
		'after_widget'  => '</nav>',
		
	) );
}
add_action( 'widgets_init', 'vaiahotel_right_menu' );



/**
 * Enqueue scripts and styles.
 */
function vaiahotel_scripts() {
	wp_enqueue_style( 'vaiahotel-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vaiahotel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vaiahotel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vaiahotel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// add the excerpt in page wordpress
add_post_type_support( 'page', 'excerpt' );

// lay hinh anh dai dien ra trang chu
function boxcontent_receation($arr){
	
	//print_r($arr);
	
?>
<div class="row">
	<div class="col-md-12">
		 
		<div class="col-md-4">
			<div class="vc_column-inner ">
				<div  class="wpb_wrapper">
					<div class="cms-service-wrapper cms-service-layout1 text-center">
						<div class="cms-service-inner">
							<div class="cms-service-content">
								<div class="image"> <?php echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?></div>
								<h3 class="title ft-nvr"><a href="#" target="_self"><?php echo get_the_title($arr['page_01'])   ?> </a>	 	</h3>
								<div class="cms-service-content-hover">
		                        <div class="description">
		                            <?php echo get_the_excerpt( $arr['page_01'] ); ?>
		                        </div>
		                        <a href="<?php the_permalink( $arr['page_01'] ) ?>" target="_self">View Treatments</a>
		                    	</div>
		                    	<div class="cms-service-nav">
				                    <div class="cms-service-overlay"></div>
				                    <div class="cms-service-nav-inner">
				                        <a href="#" target="_self"><i class="fa fa-chevron-up"></i></a>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="col-md-4">
			
				<div class="vc_column-inner ">
				<div  class="wpb_wrapper">
					<div class="cms-service-wrapper cms-service-layout1 text-center">
						<div class="cms-service-inner">
							<div class="cms-service-content">
								<div class="image"> <?php echo get_the_post_thumbnail( $arr['page_02'], '', array( 'class' => 'aligncenter' ) ); ?></div>
								<h3 class="title ft-nvr"><a href="#" target="_self"><?php echo get_the_title($arr['page_02'])   ?> </a>	 	</h3>
								<div class="cms-service-content-hover">
		                        <div class="description">
		                            <?php echo get_the_excerpt( $arr['page_02'] ); ?>
		                        </div>
		                        <a href="<?php the_permalink( $arr['page_02'] ) ?>" target="_self">View Treatments</a>
		                    	</div>
		                    	<div class="cms-service-nav">
				                    <div class="cms-service-overlay"></div>
				                    <div class="cms-service-nav-inner">
				                        <a href="#" target="_self"><i class="fa fa-chevron-up"></i></a>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		<div class="vc_column-inner ">
				<div  class="wpb_wrapper">
					<div class="cms-service-wrapper cms-service-layout1 text-center">
						<div class="cms-service-inner">
							<div class="cms-service-content">
								<div class="image"> <?php echo get_the_post_thumbnail( $arr['page_03'], '', array( 'class' => 'aligncenter' ) ); ?></div>
								<h3 class="title ft-nvr"><a href="#" target="_self"><?php echo get_the_title($arr['page_03'])   ?> </a>	 	</h3>
								<div class="cms-service-content-hover">
		                        <div class="description">
		                            <?php echo get_the_excerpt( $arr['page_03'] ); ?>
		                        </div>
		                        <a href="<?php the_permalink( $arr['page_03'] ) ?>" target="_self">View Treatments</a>
		                    	</div>
		                    	<div class="cms-service-nav">
				                    <div class="cms-service-overlay"></div>
				                    <div class="cms-service-nav-inner">
				                        <a href="#" target="_self"><i class="fa fa-chevron-up"></i></a>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php }

function get_about($pageid){ ?>

	<div class="col-md-12">
		<div class="col-md-6"	> 
			<h3 class="title">
					 	Welcome to Vaia Boutique Hotel Hoi An	 
			</h3>
			<div class=" text-justify">
					<?php echo get_the_excerpt($pageid ); ?>
			</div>
			<div>
				<div class="col-xs-12 col-md-6  text-center"><button class="btn btn-primary-alt btn-md"><a href="#">LEARN MORE</a></button></div>
				<div class="col-xs-12 col-md-6 text-center"><button class="btn btn-primary btn-md"> <a href="#">VIEW SERVICES</a></button></div>
				
				
			</div>
		</div>
	</div>

<?php
}

function boxcontent_special($arr){
	//print_r($arr);
	
?>
<div class="row">
	<div class="col-md-12">
		<div>
			<h2 class="modal-title home-title text-center"><?php echo $arr['title']; ?></h2>
			<div class="text-center bootstrap_tabs_custom-link"><a class="btn btn-info " href="<?php the_permalink( $arr['page'] ) ?>"><span>See all</span></a></div>
		</div>
	
		<div class="col-md-4">
			
			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">

				<img src="<?php bloginfo( 'template_directory' ) ?>/images/ally_beach2.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_02'])   ?>	 
				</h3>
				<div class=""><?php // echo $content; ?> 
					<?php echo get_the_excerpt( $arr['page_02'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_02'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>

		<div class="col-md-4">
			
			<?php // echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">	
				<img src="<?php bloginfo( 'template_directory' ) ?>/images/bus.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_01'])   ?>	 	
				</h3>
				<div class=""><?php // echo $content; ?> 
					<?php echo get_the_excerpt( $arr['page_01'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_01'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>

		<div class="col-md-4">
			
			<div class="border-radius text-center col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
				<img src="<?php bloginfo( 'template_directory' ) ?>/images/ally_spa2.png" alt="">
			</div>
			<div class="text-center">
				<h3 class="modal-title">
				 	<?php echo get_the_title($arr['page_03'])   ?>	 
				</h3>
				<div class=""><?php // echo $content; ?> 
					<?php echo get_the_excerpt( $arr['page_03'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_03'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
	</div>
</div>	

<?php }
function boxcontent_privileges($arr){ ?>
<div class="row">
	<div class="col-md-12">
		<div>
			<h2 class="modal-title home-title text-center"><?php echo $arr['title']; ?></h2>
			<div class="text-center bootstrap_tabs_custom-link"><a class="btn btn-info " href="<?php the_permalink( $arr['page'] ) ?>"><span>See all</span></a></div>
		</div>
		<div class="col-md-6">
			
			<?php echo get_the_post_thumbnail( $arr['page_01'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				  <?php echo get_the_title($arr['page_01'])   ?> 
				</h3>
				<div class=""><?php // echo $content; ?> 
					<?php echo get_the_excerpt( $arr['page_01'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_01'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
		<div class="col-md-6">
			
			<?php echo get_the_post_thumbnail( $arr['page_02'], '', array( 'class' => 'aligncenter' ) ); ?>
			<div class="text-center">
				<h3 class="modal-title">
				  <?php echo get_the_title($arr['page_02'])   ?>	 
				</h3>
				<div class=""><?php // echo $content; ?> 
					<?php echo get_the_excerpt( $arr['page_02'] ); ?>
				</div>
				<div class="text-center"><a class="btn btn-info readmore" href="<?php the_permalink( $arr['page_02'] ) ?>"><span>More info</span></a></div>
			</div>
		</div>
		 
	</div>
</div>	
<?php }

