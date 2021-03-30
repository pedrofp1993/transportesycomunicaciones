<?php
    $primerrecomendacion = get_field('primer_recomendacion');
    if($primerrecomendacion != ''):
?>
<aside class="sidebar">
    <div class="widget_text widget"><h3 class="sidebar-h3">Recomendaciones</h3>
    <div class="textwidget custom-html-widget"><ul>
        <li>
            <p>
                <?php echo get_field('primer_recomendacion'); ?>
            </p>
        </li>
    
    <?php
        $segundarecomendacion = get_field('segunda_recomendacion');
        if($segundarecomendacion != ''):
    ?>
        <li>
            <p>
                <?php echo get_field('segunda_recomendacion'); ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $tercerrecomendacion = get_field('tercer_recomendacion');
        if($tercerrecomendacion != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('tercer_recomendacion'); 
                ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $cuartarecomendacion = get_field('cuarta_recomendacion');
        if($cuartarecomendacion != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('cuarta_recomendacion'); 
                ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $quintarecomendacion = get_field('quinta_recomendacion');
        if($quintarecomendacion != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('quinta_recomendacion'); 
                ?>
            </p>
        </li>
    <?php
        endif;
    ?>
</ul></div></div></aside>
<?php
        endif;
    ?>