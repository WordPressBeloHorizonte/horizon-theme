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
	*/
	function horizon_color_customize(){
	    ?>
	    <style>
			.color-primary,
			#footer a:hover,
			.skills-list li:hover .icon,
			.horizon-header .title span,
			#portfolio .menu-item-link:hover,
			.blog-item .blog-item-footer a:hover,
			.navbar-default .navbar-nav > li:hover > a,
			#services .service .service-wrapper:hover .service-icon,	
			a {
				color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}	
			
			.horizon-btn,
			#footer .general-info,
			.dropdown-menu .active > a, 
			.horizon-search .search-btn,
			#portfolio .menu-item:after,
			.pagination-wrap ul li a:hover,
			.pagination-wrap ul li .current,
			.blog-item .blog-item-header .sep,
			.navbar-default .navbar-nav > li:after,		
			.navbar-nav > li > .dropdown-menu a:hover,
			#services .service .service-wrapper:hover .sep,
			.horizon-header .sep, .background-primary, .hover-primary:hover,
			.portfolio-list .portfolio-item .portfolio-item-caption .portfolio-item-title::before {
				background-color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}

			.skills-list,
			.comment-form input:active,
			.comment-form input:focus,
			.horizon-form input:active,
			.horizon-form input:focus,
			.pagination-wrap ul li .current,
			.horizon-form textarea:active,
			.horizon-form textarea:focus,
			.comment-form textarea:active,
			.comment-form textarea:focus,
			.blog-item .blog-item-image,
			.pagination-wrap ul li a:hover,
			.navbar-default .navbar-nav > li:hover,
			blockquote.cite footer, .border-primary,
			.blog-item .blog-item-footer .blog-item-comments {
				border-color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}

			.navbar-right .dropdown-menu {
				border-top-color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}

			.navbar-default .navbar-nav > li > a:hover,
			.navbar-default .navbar-nav > li > a:focus,
			.navbar-default .navbar-nav > .open > a:hover,
			.navbar-default .navbar-nav > .open > a:focus,
			.navbar-default .navbar-nav > .open > a,
			.navbar-default .navbar-nav > .active,
			.navbar-default .navbar-nav > .active > a,
			.navbar-default .navbar-nav > .active > a:active,
			.navbar-default .navbar-nav > .active > a:hover,
			.navbar-default .navbar-nav > .active > a:focus {
				border-color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
				color: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}

			#footer .social-icons svg:hover {
				fill: <?php echo get_theme_mod('secondary_color', '#000000'); ?>;
			}
	    </style>
	    <?php
	}
}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register' , array( 'Horizon_Theme_Customize' , 'register' ) );


// Output custom CSS to live site
add_action( 'wp_head' , array( 'Horizon_Theme_Customize' , 'horizon_color_customize' ) );