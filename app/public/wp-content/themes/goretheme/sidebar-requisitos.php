<?php
    $primerrequisito = get_field('primer_requisito');
    if($primerrequisito != ''):
?>
<aside class="sidebar">
    <div class="widget_text widget"><h3 class="sidebar-h3">Requisitos</h3>
    <div class="textwidget custom-html-widget"><ul>
        <li>
            <p>
                <?php echo get_field('primer_requisito'); ?>
            </p>
        </li>
    
    <?php
        $segundorequisito = get_field('segundo_requisito');
        if($segundorequisito != ''):
    ?>
        <li>
            <p>
                <?php echo get_field('segundo_requisito'); ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $tercerrequisito = get_field('tercer_requisito');
        if($tercerrequisito != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('tercer_requisito'); 
                ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $cuartorequisito = get_field('cuarto_requisito');
        if($cuartorequisito != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('cuarto_requisito'); 
                ?>
            </p>
        </li>
    <?php
        endif;
    ?>
    <?php
        $quintorequisito = get_field('quinto_requisito');
        if($quintorequisito != ''):
    ?>
        <li>
            <p>
                <?php
                    echo get_field('quinto_requisito'); 
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