
<?php
/**
 *Template sin sidebar para noticias
 **/
    get_header();?>
    <div class="contenido-principal">
<section class="licensias">
    <div class="contenedor seccion">
        <h2 class="">Licencias</h2>

        <?php gore_lista_licencias(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Licencias') ) ); ?>" class="boton boton-primario">
                Ver todas las Licencias
            </a>
        </div>
    </div>
</section>
<section class="licensias">
    <div class="contenedor seccion">
        <h2 class="">Noticias</h2>

        <?php gore_lista_noticias(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Noticias') ) ); ?>" class="boton boton-primario">
                Ver todas las Noticias
            </a>
        </div>
    </div>
</section>
<section class="licensias">
    <div class="contenedor seccion">
        <h2 class="">Servicios</h2>

        <?php gore_lista_servicios(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Servicios') ) ); ?>" class="boton boton-primario">
                Ver todos los Servicios
            </a>
        </div>
    </div>
</section>
</div>

<?php get_footer() ?>