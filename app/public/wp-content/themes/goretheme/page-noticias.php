<?php   
    get_header();
?>
<main class="contenedor contenido-principal pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas'); ?>
            <?php gore_lista_noticias(); ?>
        </div>
        
</main>

<?php get_footer(); ?>