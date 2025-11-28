<?php
/**
 * Alpha Digital Agency: Block Patterns
 *
 * @since Alpha Digital Agency 1.0
 */

function alpha_digital_agency_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'alpha-digital-agency' => array( 'label' => __( 'Alpha Digital Agency', 'alpha-digital-agency' ) )
	);
	$block_pattern_categories = apply_filters( 'alpha_digital_agency_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'alpha_digital_agency_register_block_patterns', 9 );