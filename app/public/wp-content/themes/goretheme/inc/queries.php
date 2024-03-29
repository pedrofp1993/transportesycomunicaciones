<?php

function gore_lista_licencias($cantidad = -1) { ?>
    <ul class="lista-licensias">
        <?php
            $args = array(
                'post_type' =>  'gore_licencias',
                'posts_per_page' => $cantidad
            );
            $licencias = new WP_Query($args);
            while( $licencias->have_posts() ): $licencias->the_post(); ?>

            <li class="licencia card gradient">
                <div>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('MTC'); ?>
                        </a>
                    </div>
                    <div class="contenido text-center">
                        
                            <h3><?php the_title(); ?></h3>
                        
                    </div>
                </div>
            </li>

        
            <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}

function gore_lista_noticias($cantidad = -1) { ?>
    <ul class="lista-licensias">
        <?php
            $args = array(
                'post_type' =>  'gore_noticias',
                'posts_per_page' => $cantidad
            );
            $noticias = new WP_Query($args);
            while( $noticias->have_posts() ): $noticias->the_post(); ?>

            <li class="licencia card gradient">
                <div>
                <?php the_post_thumbnail('MTC'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $fecha = get_field('fecha');
                        $hora = get_field('hora');
                        $descripcion = get_field('descripcion');
                    ?>
                    <p class="desc_contenido"><?php echo $descripcion; ?></p>
                    <p class="fec_contenido"><?php echo $fecha; ?> - <?php echo $hora; ?></p>
                </div>
                </div>
            </li>

        
            <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}

function gore_lista_servicios($cantidad = -1) { ?>
    <ul class="lista-licensias">
        <?php
            $args = array(
                'post_type' =>  'gore_servicios',
                'posts_per_page' => $cantidad
            );
            $servicios = new WP_Query($args);
            while( $servicios->have_posts() ): $servicios->the_post(); ?>

            <li class="licencia card gradient">
                <?php the_post_thumbnail('MTC'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
            </li>

        
            <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php
}
