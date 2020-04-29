<?php
/**
 * Customizer sections.
 *
 * @package wpotis
 */

/**
 * Register the section sections.
 *
 * @author WDS
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function wpotis_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'wpotis_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'wpotis' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a social links section.
	$wp_customize->add_section(
		'wpotis_social_links_section',
		array(
			'title'       => esc_html__( 'Social Media', 'wpotis' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'wpotis' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		)
	);

	// Register a header section.
	$wp_customize->add_section(
		'wpotis_header_section',
		array(
			'title'    => esc_html__( 'Header Customizations', 'wpotis' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'wpotis_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'wpotis' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'wpotis_customize_sections' );
