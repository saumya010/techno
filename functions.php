<?php
/**
 * Magista functions and definitions
 *
 * @package Magista
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'magista_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function magista_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );
                add_image_size('featured-thumb',700,300,true);
		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		add_theme_support( 'custom-background', apply_filters( 'magista_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

	}

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Magista, use a find and replace
	 * to change 'magista' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'magista', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', 'magista' ),
	) );

}
endif; // magista_setup
add_action( 'after_setup_theme', 'magista_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function magista_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'magista' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'magista_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function magista_scripts() {

	// load bootstrap css
	wp_enqueue_style( 'magista-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );
       	wp_enqueue_style( 'magista-flexcss', get_template_directory_uri() . '/includes/css/flexslider.css' );
       	
       	wp_enqueue_style( 'magista-css', get_template_directory_uri() . '/style.less' );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css');           
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/includes/css/animate.min.css');           

// load Magista styles
	wp_enqueue_style( 'magista-style', get_stylesheet_uri() );
        wp_enqueue_style( 'magista-colors', get_template_directory_uri() . '/' );
         $fonts_url='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Roboto:400,300,700';
        	if(!empty($fonts_url)){
			wp_enqueue_style('font-name',esc_url_raw($fonts_url),array(),null);
		}
        wp_enqueue_script('magista-comb', get_template_directory_uri().'/includes/js/comb.js', array('jquery') );
        //1wp_enqueue_script('magista-flex', get_template_directory_uri().'/includes/js/jquery.flexslider.js', array('jquery') );
	//1wp_enqueue_script('magista-navscroller', get_template_directory_uri().'/includes/js/jquery.min.js', array('jquery'), true);
       //1 wp_enqueue_script('magista-navactive', get_template_directory_uri().'/includes/js/custom.js', array('jquery'), true);                
//	wp_enqueue_script('magista-flex2', get_template_directory_uri().'/includes/js/flex.js', array('jquery'), rand(), false);
//	wp_enqueue_script('magista-color', get_template_directory_uri().'/includes/js/color.js', array('jquery'), rand(), false);
	//wp_enqueue_script('magista-lessjs', get_template_directory_uri().'/includes/js/less-1.7.3.min.js', array('jquery'), rand(), false);
	//1wp_enqueue_script('magista-scroll', get_template_directory_uri().'/includes/js/scrollReveal.js', array('jquery'), true);
//	wp_enqueue_script('magista-scroller', get_template_directory_uri().'/includes/js/scr.js', array('jquery'), true);
	//1wp_enqueue_script('magista-navscroller1', get_template_directory_uri().'/includes/js/jquery.smint.js', array('jquery'), true);
//	wp_enqueue_script('magista-navscroller2', get_template_directory_uri().'/includes/js/navscroll.js', array('jquery'), true);
//	wp_enqueue_script('magista-navactive', get_template_directory_uri().'/includes/js/navactive.js', array('jquery'), true);
// load bootstrap js
	wp_enqueue_script('magista-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( 'magista-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( 'magista-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'magista-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'magista_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', 'new_excerpt_more');
function magista_filter_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter( 'front_page_template', 'magista_filter_front_page_template' );