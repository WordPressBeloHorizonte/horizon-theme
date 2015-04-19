<?php
/**
 * Horizon Theme Customizer
 *
 * @package Horizon_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

// Sanitizing uploads
function radium_sanitize_image( $input_image ) {
	$output = '';
	$filetype = wp_check_filetype($input_image);
	if ( $filetype["ext"] ) {
	$output = $input_image;
	}
	return $output;
}

function horizon_theme_customize_register( $wp_customize ) {

	// Remove sections and native settings will not be used in theme
	// Remove setcions
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'front_page' );

	// Remove setting
	$wp_customize->remove_setting( 'background_color' );

	// Remove controls
	// $wp_customize->remove_control( 'header_image' );

	// New settings to the top section (native section [header_image ])
	// Logo
	$wp_customize->add_setting( 'logo', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'horizom_theme_sanitize_image',
		'transport'         => 'refresh'
	) );
	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'logo',
			array(
				'label'		=> __( 'Site Logo top', 'horizon-theme' ),
				'section'	=> 'header_image',
				'settings'	=> 'logo',
				'priority'	=> 10
			)
		)
	);

	// New settings for colors section (native section [colors])
	// Primary Color
	$wp_customize->add_setting( 'primary_color', array(
		'default'           => '#fffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color',
			array(
				'label'      => __( 'Primary Color', 'horizon-theme' ),
				'section'    => 'colors',
				'settings'   => 'primary_color',
				'priority'   => 10,
			)
		)
	);

	// Secondary Color
	$wp_customize->add_setting( 'secondary_color', array(
		'default'           => '#aac54b',
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_color',
			array(
				'label'      => __( 'Secondary Color', 'horizon-theme' ),
				'section'    => 'colors',
				'settings'   => 'secondary_color',
				'priority'   => 12,
			)
		)
	);

	// Dark Color
	$wp_customize->add_setting( 'dark_color', array(
		'default'           => 'rgba(41, 44, 46, 0.9)',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'dark_color',
	        array(
	            'label'		=> __( 'Dark Color', 'horizon-theme' ),
	            'section'	=> 'colors',
	            'settings'	=> 'dark_color',
	            'type'		=> 'text'
	        )
	    )
	);

	// Ligth Gray
	$wp_customize->add_setting( 'light_gray', array(
		'default'           => '#9f9f9f',
		'sanitize_callback' => 'sanitize_hex_color',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'light_gray',
			array(
				'label'      => __( 'Ligth Gray', 'horizon-theme' ),
				'section'    => 'colors',
				'settings'   => 'light_gray',
				'priority'   => 16,
			)
		)
	);
}
add_action( 'customize_register', 'horizon_theme_customize_register' );

function horizon_theme_custom_css() {

}
