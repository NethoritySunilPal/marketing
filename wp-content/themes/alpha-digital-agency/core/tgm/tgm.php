<?php

require get_template_directory() . '/core/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function alpha_digital_agency_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Essential Blocks – Page Builder Gutenberg Blocks, Patterns & Templates
', 'alpha-digital-agency' ),
			'slug'             => 'essential-blocks',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'alpha_digital_agency_register_recommended_plugins' );