<?php
/**
 * Customizer panels.
 *
 * @package wpotis
 */

/**
 * Add a custom panels to attach sections too.
 *
 * @author WDS
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function wpotis_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel(
		'site-options',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'Site Options', 'wpotis' ),
			'description'    => esc_html__( 'Other theme options.', 'wpotis' ),
		)
	);
}
add_action( 'customize_register', 'wpotis_customize_panels' );
