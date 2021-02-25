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
                <?php the_post_thumbnail('cajas'); ?>
                </div>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $tipo_licencias = get_field('tipo_licencia');
                    ?>
                    <p><?php the_field('tipo_licencia'); ?> - <?php echo $tipo_licencias; ?></p>
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
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $fecha = get_field('fecha');
                        $hora = get_field('hora');
                    ?>
                    <p><?php the_field('fecha'); ?> - <?php echo $fecha; ?></p>
                    <p><?php the_field('hora'); ?> - <?php echo $hora; ?></p>
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
                <?php the_post_thumbnail('mediano'); ?>
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
