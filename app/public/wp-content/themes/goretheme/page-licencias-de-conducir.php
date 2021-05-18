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
                        <a href="http://transportesycomunicaciones.regioncallao.gob.pe/citasGRC/">
                        <h3>PROGRAMA TU CITA PARA EVALUACIÓN</h3>
                        </a>
                    </div>
                    <div class="contenido text-center">
                        
                            <h3>PROGRAMA TU CITA PARA EVALUACIÓN</h3>
                        
                    </div>
                </div>
            </li>
            <li class="licencia card gradient">
                <div>
                    <div>
                        <a href="<?php echo $_SERVER['REQUEST_URI']; ?>/tipos-de-licencia">
                            <h3>TIPOS DE LICENCIA DE CONDUCIR</h3>
                        </a>
                    </div>
                    <div class="contenido text-center">
                        
                            <h3>TIPOS DE LICENCIA DE CONDUCIR</h3>
                        
                    </div>
                </div>
            </li>
            <li class="licencia card gradient">
                <div>
                    <div>
                        <a href="<?php echo $_SERVER['REQUEST_URI']; ?>/licencia-de-conducir-por-primera-vez-ai">
                            <h3>MI PRIMERA LICENCIA DE CONDUCIR</h3>
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