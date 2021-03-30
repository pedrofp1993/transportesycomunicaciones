<?php
/**
 *Template sin sidebar para noticias
 **/
    get_header();?>
    <main class="contenedor contenido-principal pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas'); ?>
            <?php
                $args = array(
                    'theme_location' => 'menu-nosotros',
                    'container' => 'nav',
                    'container_class' => 'menu-nosotros text-center',

                );
                wp_nav_menu($args);
            ?>
        </div>
        
        
</main>
<?php get_footer() ?>