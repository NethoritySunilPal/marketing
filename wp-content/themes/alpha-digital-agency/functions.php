<?php
/**
 * Alpha Digital Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alpha Digital Agency
 */


if ( ! function_exists( 'alpha_digital_agency_support' ) ) :
	function alpha_digital_agency_support() {

		load_theme_textdomain( 'alpha-digital-agency', get_template_directory() . '/languages' );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'alpha_digital_agency_custom_background', array(
            'default-color' => 'fafafa',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('ALPHA_DIGITAL_AGENCY_BUY_NOW',__('https://www.themescarts.com/products/solar-wordpress-theme/','alpha-digital-agency'));
		define('ALPHA_DIGITAL_AGENCY_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/alpha-digital-agency/','alpha-digital-agency'));

	}
endif;
add_action( 'after_setup_theme', 'alpha_digital_agency_support' );


if ( ! function_exists( 'alpha_digital_agency_setup' ) ) :
	function alpha_digital_agency_setup() {

		load_theme_textdomain( 'alpha-digital-agency', get_template_directory() . '/languages' );
		
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'block-nav-menus' );
		add_theme_support( 'experimental-link-color' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'alpha-digital-agency' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alpha_digital_agency_setup' );

/**
 * Enqueue scripts and styles.
 */
function alpha_digital_agency_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array( 'dashicons' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'alpha-digital-agency-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	wp_enqueue_script('alpha-digital-agency-main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), ALPHA_DIGITAL_AGENCY_VERSION, true);

		//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome/css/all.css', array(), '5.15.3' );

}
add_action( 'wp_enqueue_scripts', 'alpha_digital_agency_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function alpha_digital_agency_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	wp_enqueue_style( 'alpha-digital-agency-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	wp_enqueue_style(
		'alpha-digital-agency-admin-css',
		get_template_directory_uri() . '/notice-getstart/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue JS
	wp_enqueue_script(
		'alpha-digital-agency-admin-js',
		get_template_directory_uri() . '/notice-getstart/theme-info.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true // Load in footer
	);
}
add_action( 'admin_enqueue_scripts', 'alpha_digital_agency_admin_scripts' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/core/init.php';

/**
 * TGM
 */
require_once get_template_directory() . '/core/tgm/tgm.php';


/** 
 * Customizer
 */
require get_template_directory() . '/core/section-pro/customizer.php';




/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'ALPHA_DIGITAL_AGENCY_PATH', trailingslashit( get_template_directory() ) );
define( 'ALPHA_DIGITAL_AGENCY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'ALPHA_DIGITAL_AGENCY_VERSION', '1.0.0' );
define( 'ALPHA_DIGITAL_AGENCY_THEME_NAME', 'alpha-digital-agency' );
define( 'ALPHA_DIGITAL_AGENCY_OPTION_NAME', 'alpha-digital-agency' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require ALPHA_DIGITAL_AGENCY_PATH . 'notice-getstart/main.php';


/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function alpha_digital_agency_run() {
	new Alpha_Digital_Agency();
}
alpha_digital_agency_run();
