<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Alpha_Digital_Agency {

	/**
	 * Define the core functionality of the theme.
	 * Init theme functions.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		$this->load_dependencies();
	}

	/**
	 * Load the required dependencies for this theme.
	 *
	 * Include the following files that make up the theme:
	 *
	 * - includes/functions.php Reusable functions.
	 * - includes/class-include.php The common bothend functionality of the theme.
	 * - includes/api/index.php Manage APIs for this theme.
	 * - notice-getstart/index.php Manage actions in the admin area.
	 * - public/index.php Manage actions in the public area.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**Theme Core Functions*/
		require_once ALPHA_DIGITAL_AGENCY_PATH . 'notice-getstart/alpha-getstart.php';

		/**The class responsible for defining all actions that occur in the admin area.*/
		require_once ALPHA_DIGITAL_AGENCY_PATH . 'notice-getstart/index.php';
	}
}