<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Alpha_Digital_Agency_Notice {

	/**
	 * Empty Constructor
	 */
	private function __construct() {}

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @return object
	 */
	public static function instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only run these methods if they haven't been ran previously.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Initialize the class.
	 * Add notice, add theme installation time and remove theme options data from databse if theme is switched to another.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_resources' ) );

	}

	/**
	 * Register the CSS/JavaScript Resources for the admin area.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {

		$unique_id = ALPHA_DIGITAL_AGENCY_THEME_NAME . '-notice';

		$version    = ALPHA_DIGITAL_AGENCY_VERSION;

		/* Localize */
		$localize = apply_filters(
			'alpha_digital_agency_notice_localize',
			array(
				'version'             => $version,
				'nonce'               => wp_create_nonce( 'wp_rest' ),
				'rest_url'            => get_rest_url(),
				'theme_info_url'      => esc_url( menu_page_url( ALPHA_DIGITAL_AGENCY_THEME_NAME, false ) ),
			)
		);

		wp_set_script_translations( $unique_id, ALPHA_DIGITAL_AGENCY_THEME_NAME );
		wp_localize_script( $unique_id, 'TrendyFashionOutfitsLocalize', $localize );
	}

}

/**
 * Return instance of  Alpha_Digital_Agency_Notice class
 *
 * @since 1.0.0
 *
 * @return Alpha_Digital_Agency_Notice
 */
function alpha_digital_agency_notice() { //phpcs:ignore
	return Alpha_Digital_Agency_Notice::instance();
}
alpha_digital_agency_notice()->run();