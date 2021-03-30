<?php
/**
 *Template sin sidebar para noticias
 **/
    get_header();?>
            <?php $iframe = get_field('iframe')?>
            <iframe width=<?php echo get_field('width') ?> height="450" style="border:0;" allowfullscreen="" loading="lazy" src=<?php echo $iframe;?> ></iframe>
            <div class="align-horizontally">
                <div class="container-contact">
                    <h2 class="h2contacto">Horario:</h2>
                    <p><?php echo get_field('horario');?></p>
                    <h2 class="h2contacto">Dirección:</h2>
                    <p><?php echo get_field('direccion');?></p>
                    <a href=<?php echo get_field('url_google');?> rel="noreferrer" target="_blank">Ver mapa</a>
                </div>
                <div class="container-contact">
                    <h2 class="h2contacto">Telefono:</h2>
                    <p><?php echo get_field('telefono')?></p>
                </div>
                
            </div>
            <div class="align-horizontally">
                
            </div>
<?php get_footer() ?>