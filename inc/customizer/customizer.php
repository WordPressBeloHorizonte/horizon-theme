<?php
/**
 * Horizon Theme Customizer
 * Contains methods for customizing the theme customization screen.
 *
 * @package Horizon_Theme
 */

class Horizon_Theme_Customize {
	/**
     * This hooks into 'customize_register' (available as of WP 3.4) and allows
     * you to add new sections and controls to the Theme Customize screen.
     *
     * Note: To enable instant preview, we have to actually write a bit of custom
     * javascript. See live_preview() for more.
     *
     * @see add_action('customize_register',$func)
     * @param \WP_Customize_Manager $wp_customize
     */
	public static function register ( $wp_customize ) {

		// Remove sections and native settings will not be used in theme
		// Remove setcions
		$wp_customize->remove_section( 'title_tagline' );
		$wp_customize->remove_section( 'background_image' );
		$wp_customize->remove_section( 'front_page' );

		// Remove setting
		$wp_customize->remove_setting( 'background_color' );

		// New settings to the top section (native section [header_image ])
		// Logo
		$wp_customize->add_setting( 'logo', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => array( $this, 'horizon_theme_sanitize_image' ),
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
			'default'           => '#ffffff',
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

	/**
	 * Sanitizing uploads
	 *
	 * @param $input_image
	 */
	function horizon_theme_sanitize_image( $input_image ) {
		$output = '';
		$filetype = wp_check_filetype($input_image);
		if ( $filetype["ext"] ) {
		$output = $input_image;
		}
		return $output;
	}

	/**
	* This will output the custom WordPress settings to the live theme's WP head.
	*
	* Used by hook: 'wp_head'
	*
	* @see add_action('wp_head',$func)
	* @since MyTheme 1.0
	*/
	public static function header_output() {
		echo '<!--Customizer CSS-->';
		echo '<style type="text/css">';
			self::generate_css('#site-title a', 'color', 'header_textcolor', '#');
			self::generate_css('body', 'background-color', 'background_color', '#');
			self::generate_css('a', 'color', 'link_textcolor');
		echo '</style>';
		echo '<!--/Customizer CSS-->';
	}
}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register' , array( 'Horizon_Theme_Customize' , 'register' ) );
