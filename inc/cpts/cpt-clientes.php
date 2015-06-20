<?php 

#Custom Post Type - Clientes

add_action( 'init', 'register_cpt_clientes' );

function register_cpt_clientes() {

	$labels = array( 
		'name' => __('Clientes','horizon-theme'),
		'singular_name' => __( 'Cliente','horizon-theme'),
		'add_new' => __('Adicionar Cliente','horizon-theme'),
		'add_new_item' => __( 'Adicionar novo Cliente','horizon-theme'),
		'edit_item' => __( 'Editar Cliente','horizon-theme'),
		'new_item' => __( 'Novo Cliente','horizon-theme'),
		'view_item' => __( 'Ver Cliente','horizon-theme'),
		'search_items' => __( 'Pesquisar Clientes','horizon-theme'),
		'not_found' => __( 'Não encontrado','horizon-theme'),
		'not_found_in_trash' => __( 'Não encontrado na Lixeira','horizon-theme'),
		'parent_item_colon' => __( 'Clientes','horizon-theme'),
		'menu_name' => __( 'Clientes','horizon-theme'),
	);
	$args = array( 
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Custom Post Type Clientes',
		'supports' => array(
			'title',
			'thumbnail', 
			'editor', 
			'author', 
			'excerpt',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'page-atributes',
			'post-formats'
		),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'clientes', $args );
}