<section class="clases">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Licencias</h2>

        <?php gymfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Licencias') ) ); ?>" class="boton boton-primario">
                Ver todas las clases
            </a>
        </div>
    </div>
</section>

<section class="noticias">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Noticias</h2>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <ul class="listado-noticias">
            <?php
                $args = array(
                    'post_type' => 'noticias', 
                    'posts_per_page' => 30
                );
                $noticias = new WP_Query($args);
                while($noticias->have_posts()): $noticias->the_post();
            ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <?php
                        $fecha = get_field('fecha');
                        $hora = get_field('hora');
                    ?>
                    <p><?php the_field('fecha'); ?> - <?php echo $fecha; ?></p>
                    <p><?php the_field('hora'); ?> - <?php echo $hora; ?></p>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

    </div>
</section>

<section class="noticias">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Noticias</h2>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <ul class="listado-noticias">
            <?php
                $args = array(
                    'post_type' => 'noticias', 
                    'posts_per_page' => 30
                );
                $noticias = new WP_Query($args);
                while($noticias->have_posts()): $noticias->the_post();
            ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <?php
                        $fecha = get_field('fecha');
                        $hora = get_field('hora');
                    ?>
                    <p><?php the_field('fecha'); ?> - <?php echo $fecha; ?></p>
                    <p><?php the_field('hora'); ?> - <?php echo $hora; ?></p>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

    </div>
</section>




