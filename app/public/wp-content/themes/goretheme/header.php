<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div class="contenedor">
        <div class="barra-navegacion">
            <div class="logo">
                <div class="block-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/logogore.png"/>
                </div>
                <div class="block-text">
                    <h1>GERENCIA REGIONAL DE TRANSPORTES Y COMUNICACIONES DEL CALLAO</h1>
                </div>
            </div>
            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal',

                );
                wp_nav_menu($args);
            ?>
        </div>
    </div>
</header>