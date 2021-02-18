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
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $tipo_licencias = get_field('tipo_licencia');
                    ?>
                    <p><?php the_field('tipo_licencia'); ?> - <?php echo $tipo_licencias; ?></p>
                </div>
            </li>

        
            <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}