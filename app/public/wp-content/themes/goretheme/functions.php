<?php

require get_template_directory() . '/inc/queries.php';

    function gore_setup() {

        // Habilitar imagenes destacadas
        add_theme_support('post-thumbnails');

        // Agregar imagenes de tamaño personalizado
        add_image_size('MTC', 349, 210, true);
        add_image_size('square', 350, 350, true);
        add_image_size('portrait', 350, 724, true);
        add_image_size('cajas', 400, 375, true);
        add_image_size('mediano', 700, 350, true);
        add_image_size('blog', 966, 350, true);
    }
    add_action('after_setup_theme', 'gore_setup');

    function GORE_menus() {
        register_nav_menus(array(
            'menu-principal' => __( 'Menu Principal', 'GORE'),
            'menu-nosotros' => __( 'Menu Nosotros', 'GORE')
        ));
    }
    add_action('init','GORE_menus');

    function GORE_scripts_styles(){
        wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0.0');
    }
    add_action('wp_enqueue_scripts','GORE_scripts_styles');
    
    add_action( 'wp_enqueue_scripts', 'dcms_load_dashicons_front_end' );

    function dcms_load_dashicons_front_end() {
        wp_enqueue_style( 'dashicons' );
    }

    add_action('wp_enqueue_scripts','web_new_fonts');

    function web_new_fonts () {
        wp_enqueue_style('grotesque-font-css',get_stylesheet_directory_uri() . '/fonts/galanogrotesque/stylesheet.css');
    }

?>