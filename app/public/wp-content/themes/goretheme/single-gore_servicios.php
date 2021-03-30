<?php get_header(); ?>

    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('template-parts/paginas'); ?>
        </div>
        <div class="div-aside">
            <?php get_sidebar('requisitos'); ?>
            <?php get_sidebar('recomendaciones'); ?>
        </div>
    </main>

<?php get_footer(); ?>