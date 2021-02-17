<?php
    function GORE_menus() {
        register_nav_menus(array(
            'menu-principal' => __( 'Menu Principal', 'GORE')
        ));
    }
    add_action('init','GORE_menus');

    function GORE_scripts_styles(){
        wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0.0');
    }
    add_action('wp_enqueue_scripts','GORE_scripts_styles');
?>