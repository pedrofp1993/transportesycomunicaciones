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
                    'theme_location' => 'menu-licencias-y-circuitos',
                    'container' => 'nav',
                    'container_class' => 'menu-licencias-y-circuitos text-center',

                );
                wp_nav_menu($args);
            ?>
        </div>
        
        
</main>
<?php get_footer() ?>