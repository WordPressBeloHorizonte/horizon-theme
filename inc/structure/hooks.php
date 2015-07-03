<?php
/**
 * Homepage
 * @see  horizon_about_section()
 * @see  horizon_separato()
 * @see  horizon_services_section()
 * @see  horizon_skills_section()
 * @see  horizon_portfolio_section()
 * @see  horizon_blog_section()
 * @see  horizon_clients_section()
 * @see  horizon_second_separator()
 * @see horizon_contact_section()
 */

add_action('homepage', 'horizon_about_section', 10);
add_action('homepage', 'horizon_separator', 20);
add_action('homepage', 'horizon_services_section', 30);
add_action('homepage', 'horizon_skills_section', 40);

if ( class_exists( 'Jetpack' ) && post_type_exists('jetpack-portfolio') ) {
	add_action('homepage', 'horizon_portfolio_section', 50);
}

add_action('homepage', 'horizon_blog_section', 60);
add_action('homepage', 'horizon_clients_section', 70);
add_action('homepage', 'horizon_second_separator', 80);
add_action('homepage', 'horizon_contact_section', 90);

/**
 * WordPress Customizer Hooks
 */
add_action( 'customize_register' , array( 'Horizon_Theme_Customize' , 'register' ) );
//add_action( 'wp_head', array( 'Horizon_Theme_Customize', 'header_output' ) );
add_action( 'customize_preview_init' , array( 'Horizon_Theme_Customize', 'live_preview' ) );
