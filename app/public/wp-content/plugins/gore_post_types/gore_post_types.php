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

// Registrar Custom Post Type
function gore_noticias_post_type() {

	$labels = array(
		'name'                  => _x( 'Noticias', 'Post Type General Name', 'gore' ),
		'singular_name'         => _x( 'Noticia', 'Post Type Singular Name', 'gore' ),
		'menu_name'             => __( 'Noticias', 'gore' ),
		'name_admin_bar'        => __( 'Noticia', 'gore' ),
		'archives'              => __( 'Archivo', 'gore' ),
		'attributes'            => __( 'Atributos', 'gore' ),
		'parent_item_colon'     => __( 'Noticia Padre', 'gore' ),
		'all_items'             => __( 'Todas Las Noticias', 'gore' ),
		'add_new_item'          => __( 'Agregar Noticia', 'gore' ),
		'add_new'               => __( 'Agregar Noticia', 'gore' ),
		'new_item'              => __( 'Nueva Noticia', 'gore' ),
		'edit_item'             => __( 'Editar Noticia', 'gore' ),
		'update_item'           => __( 'Actualizar Noticia', 'gore' ),
		'view_item'             => __( 'Ver Noticia', 'gore' ),
		'view_items'            => __( 'Ver Noticias', 'gore' ),
		'search_items'          => __( 'Buscar Noticia', 'gore' ),
		'not_found'             => __( 'No Encontrado', 'gore' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gore' ),
		'featured_image'        => __( 'Imagen Destacada', 'gore' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gore' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gore' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gore' ),
		'insert_into_item'      => __( 'Insertar en Noticia', 'gore' ),
		'uploaded_to_this_item' => __( 'Agregado en Noticia', 'gore' ),
		'items_list'            => __( 'Lista de Noticias', 'gore' ),
		'items_list_navigation' => __( 'Navegación de Noticias', 'gore' ),
		'filter_items_list'     => __( 'Filtrar Noticias', 'gore' ),
	);
	$args = array(
		'label'                 => __( 'Noticia', 'gore' ),
		'description'           => __( 'Noticias para el Sitio Web', 'gore' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gore_noticias', $args );

}
add_action( 'init', 'gore_noticias_post_type', 0 );

// Registrar Custom Post Type
function gore_servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'gore' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'gore' ),
		'menu_name'             => __( 'Servicios', 'gore' ),
		'name_admin_bar'        => __( 'Servicio', 'gore' ),
		'archives'              => __( 'Archivo', 'gore' ),
		'attributes'            => __( 'Atributos', 'gore' ),
		'parent_item_colon'     => __( 'Servicio Padre', 'gore' ),
		'all_items'             => __( 'Todas Las Servicios', 'gore' ),
		'add_new_item'          => __( 'Agregar Servicio', 'gore' ),
		'add_new'               => __( 'Agregar Servicio', 'gore' ),
		'new_item'              => __( 'Nueva Servicio', 'gore' ),
		'edit_item'             => __( 'Editar Servicio', 'gore' ),
		'update_item'           => __( 'Actualizar Servicio', 'gore' ),
		'view_item'             => __( 'Ver Servicio', 'gore' ),
		'view_items'            => __( 'Ver Servicios', 'gore' ),
		'search_items'          => __( 'Buscar Servicio', 'gore' ),
		'not_found'             => __( 'No Encontrado', 'gore' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gore' ),
		'featured_image'        => __( 'Imagen Destacada', 'gore' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gore' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gore' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gore' ),
		'insert_into_item'      => __( 'Insertar en Servicio', 'gore' ),
		'uploaded_to_this_item' => __( 'Agregado en Servicio', 'gore' ),
		'items_list'            => __( 'Lista de Servicios', 'gore' ),
		'items_list_navigation' => __( 'Navegación de Servicios', 'gore' ),
		'filter_items_list'     => __( 'Filtrar Servicios', 'gore' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'gore' ),
		'description'           => __( 'Servicios para el Sitio Web', 'gore' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-admin-generic',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gore_servicios', $args );

}
add_action( 'init', 'gore_servicios_post_type', 0 );

// Registrar Custom Post Type
function gore_circuitos_post_type() {

	$labels = array(
		'name'                  => _x( 'Circuitos', 'Post Type General Name', 'gore' ),
		'singular_name'         => _x( 'Circuito', 'Post Type Singular Name', 'gore' ),
		'menu_name'             => __( 'Circuitos', 'gore' ),
		'name_admin_bar'        => __( 'Circuito', 'gore' ),
		'archives'              => __( 'Archivo', 'gore' ),
		'attributes'            => __( 'Atributos', 'gore' ),
		'parent_item_colon'     => __( 'Circuito Padre', 'gore' ),
		'all_items'             => __( 'Todas Las Circuitos', 'gore' ),
		'add_new_item'          => __( 'Agregar Circuito', 'gore' ),
		'add_new'               => __( 'Agregar Circuito', 'gore' ),
		'new_item'              => __( 'Nueva Circuito', 'gore' ),
		'edit_item'             => __( 'Editar Circuito', 'gore' ),
		'update_item'           => __( 'Actualizar Circuito', 'gore' ),
		'view_item'             => __( 'Ver Circuito', 'gore' ),
		'view_items'            => __( 'Ver Circuitos', 'gore' ),
		'search_items'          => __( 'Buscar Circuito', 'gore' ),
		'not_found'             => __( 'No Encontrado', 'gore' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gore' ),
		'featured_image'        => __( 'Imagen Destacada', 'gore' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gore' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gore' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gore' ),
		'insert_into_item'      => __( 'Insertar en Circuito', 'gore' ),
		'uploaded_to_this_item' => __( 'Agregado en Circuito', 'gore' ),
		'items_list'            => __( 'Lista de Circuitos', 'gore' ),
		'items_list_navigation' => __( 'Navegación de Circuitos', 'gore' ),
		'filter_items_list'     => __( 'Filtrar Circuitos', 'gore' ),
	);
	$args = array(
		'label'                 => __( 'Circuito', 'gore' ),
		'description'           => __( 'Circuitos para el Sitio Web', 'gore' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 9,
        'menu_icon'             => 'dashicons-car',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gore_circuitos', $args );

}
add_action( 'init', 'gore_circuitos_post_type', 0 );