<?php
/*
    Plugin Name: Gore - Post Types
    Plugin Uri:
    Description: Añade Post Types al sitio gore
    Version: 1.0.0
    Author: Pedro Ojeda Sarmiento
    Author Uri:
    Text Domain: gore
*/

if(!defined('ABSPATH')) die();
// Registrar Custom Post Type
function gore_licencias_post_type() {

	$labels = array(
		'name'                  => _x( 'Licencias', 'Post Type General Name', 'gore' ),
		'singular_name'         => _x( 'Licencia', 'Post Type Singular Name', 'gore' ),
		'menu_name'             => __( 'Licencias', 'gore' ),
		'name_admin_bar'        => __( 'Licencia', 'gore' ),
		'archives'              => __( 'Archivo', 'gore' ),
		'attributes'            => __( 'Atributos', 'gore' ),
		'parent_item_colon'     => __( 'Licencia Padre', 'gore' ),
		'all_items'             => __( 'Todas Las Licencias', 'gore' ),
		'add_new_item'          => __( 'Agregar Licencia', 'gore' ),
		'add_new'               => __( 'Agregar Licencia', 'gore' ),
		'new_item'              => __( 'Nueva Licencia', 'gore' ),
		'edit_item'             => __( 'Editar Licencia', 'gore' ),
		'update_item'           => __( 'Actualizar Licencia', 'gore' ),
		'view_item'             => __( 'Ver Licencia', 'gore' ),
		'view_items'            => __( 'Ver Licencias', 'gore' ),
		'search_items'          => __( 'Buscar Licencia', 'gore' ),
		'not_found'             => __( 'No Encontrado', 'gore' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gore' ),
		'featured_image'        => __( 'Imagen Destacada', 'gore' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gore' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gore' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gore' ),
		'insert_into_item'      => __( 'Insertar en Licencia', 'gore' ),
		'uploaded_to_this_item' => __( 'Agregado en Licencia', 'gore' ),
		'items_list'            => __( 'Lista de Licencias', 'gore' ),
		'items_list_navigation' => __( 'Navegación de Licencias', 'gore' ),
		'filter_items_list'     => __( 'Filtrar Licencias', 'gore' ),
	);
	$args = array(
		'label'                 => __( 'Licencia', 'gore' ),
		'description'           => __( 'Licencias para el Sitio Web', 'gore' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gore_licencias', $args );

}
add_action( 'init', 'gore_licencias_post_type', 0 );