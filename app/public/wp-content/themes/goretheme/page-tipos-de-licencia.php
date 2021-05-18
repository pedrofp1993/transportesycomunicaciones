<?php   
    get_header();
?>
<main class="contenedor contenido-principal pagina seccion no-sidebar">
        <div class="text-center">
            <?php get_template_part('template-parts/paginas'); ?>
            <ul class="lista-licensias">

            <li class="licencia card gradient">
                <div>
                    <div>
                        <a href="<?php echo  $_SERVER['SERVER_NAME']; ?>">
                        </a>
                    </div>
                    <div class="contenido text-center">
                        
                            <h3>MI PRIMERA LICENCIA DE CONDUCIR</h3>
                        
                    </div>
                </div>
            </li>
        </ul>
        </div>
        
</main>

<?php get_footer(); ?>