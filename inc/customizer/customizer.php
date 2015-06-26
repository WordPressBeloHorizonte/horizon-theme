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

		/**
		 * Failsafe is safe
		 */
		if ( ! isset( $wp_customize ) ) {
			return;
		}

		// Remove sections and native settings will not be used in theme
		// Remove setcions
		//$wp_customize->remove_section( 'title_tagline' );
		$wp_customize->remove_section( 'background_image' );

		// Remove setting
		$wp_customize->remove_setting( 'background_color' );

		// New settings to the top section (native section [header_image ])
		// Logo
		$wp_customize->add_setting( 'logo', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => array( 'Horizon_Theme_Customizer', 'horizon_theme_sanitize_image' ),
			'transport'         => 'refresh'
		) );

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo',
				array(
					'label'			=> __( 'Main Site Logo (header)', 'horizon-theme' ),
					'description' 	=> __( 'Select the image to be used for the site logo.', 'horizon-theme' ),
					'section'		=> 'header_image',
					'settings'		=> 'logo',
					'priority'		=> 10
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

		$wp_customize->add_section(
			'horizon_theme_section_info',
			array(
				'title' 		=> __( 'Horizon Theme Options', 'horizon-theme' ),
				'description' 	=> __( 'Some Basic information needed by the theme.', 'horizon-theme' ),
				'capability' 	=> 'edit_theme_options'
			)
		);

		$wp_customize->add_setting(
			'latitude',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_setting(
			'longitude',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_control(
			'display_latitude',
			array(
				'settings' 		=> 'latitude',
				'section'  		=> 'horizon_theme_section_info',
				'type'			=> 'text',
				'label'			=> __( 'Latitude', 'horizon-theme' ),
				'description' 	=> __( 'Fill the Latitude for the map', 'horizon-theme' )
			)
		);

		$wp_customize->add_control(
			'display_langitute',
			array(
				'settings' 		=> 'longitude',
				'section'  		=> 'horizon_theme_section_info',
				'type'			=> 'text',
				'label'			=> __( 'Longitude', 'horizon-theme' ),
				'description' 	=> __( 'Fill the Longitude for the map', 'horizon-theme' )
			)
		);

		$wp_customize->add_setting(
			'phone',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_control(
			'display_phone',
			array(
				'settings' 		=> 'phone',
				'section'  		=> 'horizon_theme_section_info',
				'type'			=> 'text',
				'label'			=> __( 'Contact Phone Number', 'horizon-theme' ),
			)
		);

		$wp_customize->add_setting(
			'email',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_control(
			'display_email',
			array(
				'settings' 		=> 'email',
				'section'  		=> 'horizon_theme_section_info',
				'type'			=> 'text',
				'label'			=> __( 'Email Contact', 'horizon-theme' ),
			)
		);

		$wp_customize->add_setting(
			'address',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_control(
			'display_address',
			array(
				'settings' 		=> 'address',
				'section'  		=> 'horizon_theme_section_info',
				'type'			=> 'text',
				'label'			=> __( 'Address', 'horizon-theme' ),
			)
		);

		$wp_customize->add_section(
			'horizon_theme_section_pages_title',
			array(
				'title' 		=> __( 'Horizon Pages Title', 'horizon-theme' ),
				'description' 	=> __( 'Define The title and subtitle for each page in Horizon', 'horizon-theme' ),
				'capability' 	=> 'edit_theme_options'
			)
		);

		$wp_customize->add_setting(
			'blog_title',
			array(
				'default' 	=> '',
				'type'		=> 'theme_mod'
			)
		);

		$wp_customize->add_control(
			'display_blog_title',
			array(
				'settings' 		=> 'blog_title',
				'section'  		=> 'horizon_theme_section_pages_title',
				'type'			=> 'text',
				'label'			=> __( 'Blog Title Page', 'horizon-theme' ),
			)
		);

		// Dark Color
		/*$wp_customize->add_setting( 'dark_color', array(
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
		);*/
	}

	/**
	 * Sanitizing uploads
	 *
	 * @param $input_image
	 * @return string
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
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($mod_name) has no defined value, the CSS will not be output.
	 *
	 * @uses get_theme_mod()
	 * @param string $selector CSS selector
	 * @param string $style The name of the CSS *property* to modify
	 * @param string $mod_name The name of the 'theme_mod' option to fetch
	 * @param string $prefix Optional. Anything that needs to be output before the CSS property
	 * @param string $postfix Optional. Anything that needs to be output after the CSS property
	 * @param bool $echo Optional. Whether to print directly to the page (default: true).
	 * @return string Returns a single line of CSS with selectors and a property.
	 */
	public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
		$return = '';
		$mod = get_theme_mod($mod_name);
		if ( ! empty( $mod ) ) {
			$return = sprintf('%s { %s:%s; }',
				$selector,
				$style,
				$prefix.$mod.$postfix
			);
			if ( $echo ) {
				echo $return;
			}
		}
		return $return;
	}

	/**
	 * This outputs the javascript needed to automate the live settings preview.
	 * Also keep in mind that this function isn't necessary unless your settings
	 * are using 'transport'=>'postMessage' instead of the default 'transport'
	 * => 'refresh'
	 *
	 * Used by hook: 'customize_preview_init'
	 *
	 * @see add_action('customize_preview_init', $func)
	 */
	public static function live_preview() {
		wp_enqueue_script(
			'horizon-customizer-preview',
			get_template_directory_uri() . '/assets/js/theme-customizer.js',
			array(  'jquery', 'customize-preview' ),
			'1.0',
			true
		);
	}

	/**
	* This will output the custom WordPress settings to the live theme's WP head.
	*
	* Used by hook: 'wp_head'
	*
	* @see add_action('wp_head',$func)
	*/
	public static function header_output() {
		echo '<!--Customizer CSS-->';
		echo '<style type="text/css">';
			self::generate_css('.primary_color', 'color', 'primary_color', '#');
			self::generate_css('body', 'background-color', 'background_color', '#');
			self::generate_css('a', 'color', 'link_textcolor');
		echo '</style>';
		echo '<!--/Customizer CSS-->';
	}
}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register' , array( 'Horizon_Theme_Customize' , 'register' ) );
