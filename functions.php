<?php
/**
 * st-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package st-blog
 */

require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'st_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function st_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on st-blog, use a find and replace
		 * to change 'st-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'st-blog', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'st-blog' ),

		) );

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
		add_theme_support( 'custom-background', apply_filters( 'st_blog_custom_background_args', array(
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
			// 'height'      => 250,
			// 'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'st_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function st_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'st_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'st_blog_content_width', 0 );

/*breadcrum function*/

if ( ! function_exists( 'st_blog_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function st_blog_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/frameworks/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;

// google fonts function
function st_blog_google_fonts()
{
	global $st_blog_customizer_all_values;
	$fonts_url  = '';
	$fonts 		= array();

	$st_blog_font_family_site_identity   = $st_blog_customizer_all_values['st-blog-font-family-site-identity'];
	$st_blog_font_family_menu			 = $st_blog_customizer_all_values['st-blog-font-family-menu'];
	$st_blog_font_family_h1_h6			 = $st_blog_customizer_all_values['st-blog-font-family-h1-h6'];
	$st_blog_font_family_button_text	 = $st_blog_customizer_all_values['st-blog-font-family-button-text'];
	$st_blog_font_family_copy_right_text = $st_blog_customizer_all_values['st-blog-footer-copy-right-text'];

	$st_blog_fonts = array();
	$st_blog_fonts[] = $st_blog_font_family_site_identity;
	$st_blog_fonts[] = $st_blog_font_family_menu;
	$st_blog_fonts[] = $st_blog_font_family_h1_h6;
	$st_blog_fonts[] = $st_blog_font_family_button_text;
	$st_blog_fonts[] = $st_blog_font_family_copy_right_text;

	$st_blog_fonts_stylesheet = '//fonts.googleapis.com/css?family=';

	$i  = 0;
	  for ($i=0; $i < count( $st_blog_fonts ); $i++) { 

	    if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'st-blog' ), $st_blog_fonts[$i] ) ) {
			$fonts[] = $st_blog_fonts[$i];
		}

	  }

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urldecode( implode( '|', $fonts ) ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}


/**
 * Enqueue scripts and styles.
 */
function st_blog_scripts() {
	global $st_blog_customizer_all_values;

	$suffix = '';
	/*$suffix = '.min';
	
	if(defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ){ 
		$suffix = '';
	}*/
	/*google font*/
		wp_enqueue_style( 'st-blog-google-fonts', st_blog_google_fonts() );
	//root path for style and scripts

	wp_enqueue_style( 'st-blog-style', get_stylesheet_uri() );

	// thirdparty style file
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/build/css/bootstrap'.$suffix.'.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/build/css/fontawesome-all'.$suffix.'.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/build/css/slick'.$suffix.'.css' );

	//theme-style
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/build/css/style'.$suffix.'.css' );
	// testing purpose
	// wp_enqueue_style( 'theme-style', 'http://192.168.2.28/themes/st-blog/wp-content/themes/st-blog/assets/build/css/style'.$suffix.'.css' );

	wp_enqueue_script( 'st-blog-navigation', get_template_directory_uri() . '/assets/build/js/navigation'.$suffix.'.js', array(), '20151215', true );

	wp_enqueue_script( 'st-blog-skip-link-focus-fix', get_template_directory_uri() . '/assets/build/js/skip-link-focus-fix'.$suffix.'.js', array(), '20151215', true );

	// thirdparty assets
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/build/js/jquery'.$suffix.'.js', array(), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/build/js/bootstrap'.$suffix.'.js', array(), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/build/js/slick'.$suffix.'.js', array(), true );
	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/build/js/mrMobileMenu'.$suffix.'.js', array(), true );
	wp_enqueue_script( 'st-blog-custom-js', get_template_directory_uri() . '/assets/build/js/st-blog-custom-js'.$suffix.'.js', array(), true );


	wp_localize_script( 'st-blog-custom-js', 'customzier_values', $st_blog_customizer_all_values);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// wp_add_inline_style( 'theme-style', st_blog_inline_style() );
}
add_action( 'wp_enqueue_scripts', 'st_blog_scripts' );


/**
 * Customizer control scripts and styles.
 */
function st_blog_customizer_control_scripts()
{

    wp_enqueue_style('st-blog-customize-controls', get_template_directory_uri() . '/assets/build/css/admin-style.css');

}

add_action('customize_controls_enqueue_scripts', 'st_blog_customizer_control_scripts', 0);


/*added admin css for meta*/
function st_blog_wp_admin_style($hook) {
	
	if ( 'widgets.php' == $hook ) {
		wp_enqueue_media();
		wp_enqueue_script( 'st-blog-widgets-script', get_template_directory_uri() . '/assets/build/js/widgets.js', array( 'jquery' ), '1.0.0' );
	}
}
add_action( 'admin_enqueue_scripts', 'st_blog_wp_admin_style' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( !function_exists('st_blog_primary_menu')  ) :
	/**
	 * Fallback menu to primary-menu
	 * 
	 * @since  st-blog 1.0.0
	 */
	function st_blog_primary_menu()
	{

		?>
		<ul id="menu">
			<li><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php esc_html_e('Home','st-blog');?></a></li>
			<li><a href="<?php echo esc_url( admin_url( '/nav-menus.php' ) );?>"><?php esc_html_e('Set Primary Menu','st-blog');?></a></li>
		</ul>
	<?php
	}
endif;


