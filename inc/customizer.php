<?php
/**
 * Customizer options: the footer name and the optional theme credit (off by default).
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Checkbox sanitizer. */
function clearframe_sanitize_checkbox( $value ) {
	return (bool) $value;
}

/**
 * Register the settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function clearframe_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'clearframe_footer',
		array(
			'title'    => __( 'Footer', 'clearframe' ),
			'priority' => 120,
		)
	);

	$wp_customize->add_setting(
		'clearframe_owner_name',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'clearframe_owner_name',
		array(
			'section'     => 'clearframe_footer',
			'label'       => __( 'Name in the copyright line', 'clearframe' ),
			'description' => __( 'Leave empty to use the site title.', 'clearframe' ),
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'clearframe_show_credit',
		array(
			'default'           => false,
			'sanitize_callback' => 'clearframe_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'clearframe_show_credit',
		array(
			'section' => 'clearframe_footer',
			'label'   => __( 'Show "Built on ClearFrame" in the footer', 'clearframe' ),
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'clearframe_customize_register' );
