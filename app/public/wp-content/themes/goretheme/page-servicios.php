<?php   
    get_header();
?>
<main class="contenedor contenido-principal pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas'); ?>
            <?php gore_lista_servicios(); ?>
        </div>
        
</main>

<?php get_footer(); ?>