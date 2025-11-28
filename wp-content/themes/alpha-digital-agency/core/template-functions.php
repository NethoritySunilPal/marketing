<?php
/**
 * @package Alpha Digital Agency
 */

function alpha_digital_agency_customizer_add_defaults( $default_options) {
	$defaults = array(
		'alpha_digital_agency_excerpt_length'    => 30,
	);
	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'alpha_digital_agency_customizer_defaults', 'alpha_digital_agency_customizer_add_defaults' );

function alpha_digital_agency_gtm( $option ) {
	$defaults = apply_filters( 'alpha_digital_agency_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'alpha_digital_agency_excerpt_length' ) ) :
	function alpha_digital_agency_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$length	= alpha_digital_agency_gtm( 'alpha_digital_agency_excerpt_length' );

		return absint( $length );
	} 
endif;
add_filter( 'excerpt_length', 'alpha_digital_agency_excerpt_length', 999 );