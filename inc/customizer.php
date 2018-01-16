<?php
/**
 * txakolina Theme Customizer.
 *
 * @package txakolina
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function txakolina_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->get_section( 'colors' )->title = __( 'Theme Colors', 'txakolina' );
	$wp_customize->get_section( 'header_image' )->title = __( 'Header Slider', 'txakolina' );

	$wp_customize->get_control( 'display_header_text' )->label = __( 'Show Tagline in Header Slider', 'txakolina' );
	$wp_customize->get_control( 'header_textcolor' )->label = __( 'Tagline Text Color', 'txakolina' );
}
add_action( 'customize_register', 'txakolina_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function txakolina_customize_preview_js() {
	wp_enqueue_script( 'txakolina_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'txakolina_customize_preview_js' );
