<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>

<header class="site-header">
    <div class="contenedor-header">
        <div class="barra-navegacion">
            <div class="logo">
                <div class="block-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/LOGO-GORE-CALLAO-2020-v2.png"/>
                </div>
                <div class="block-text">
                    <h1>GERENCIA REGIONAL DE TRANSPORTES Y COMUNICACIONES</h1>
                </div>
                
            </div>
            <nav id="menu-principal"class="menu-principal text-center">
                <ul id="menu-menu-1" class="menu">
                    <li id="inicio" class="menu-slide menu-item menu-item-type-custom menu-item-object-custom menu-item-home inicio"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Inicio') ) ); ?>">INICIO</a></li>
                    <li id="nosotros" class="menu-slide menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nosotros"><a id="nosotros-a" href="<?php echo esc_url( get_permalink( get_page_by_title('Nosotros') ) ); ?>">NOSOTROS</a>
                    
                        <ul class="sub-menu">
                            <li id="historia" class="menu-item menu-item-type-post_type menu-item-object-page historia"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Historia') ) ); ?>">HISTORIA</a></li>
                            <li id="funciones" class="menu-item menu-item-type-post_type menu-item-object-page funciones"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Funciones') ) ); ?>">FUNCIONES</a></li>
                            <li id="mision" class="menu-item menu-item-type-post_type menu-item-object-page mision"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Mision') ) ); ?>">MISIÓN</a></li>
                            <li id="vision" class="menu-item menu-item-type-post_type menu-item-object-page vision"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Vision') ) ); ?>">VISIÓN</a></li>
                        </ul>
                        
                    </li>
                    <li id="licencias" class="menu-slide menu-item menu-item-type-post_type menu-item-object-page licencias"><a id="licencias-a" href="#">LICENCIAS Y CIRCUITOS</a>
                        <ul class="sub-menu">
                            <li id="circuitos" class="menu-item menu-item-type-post_type menu-item-object-page circuitos"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Licencias de Conducir') ) ); ?>">LICENCIAS</a></li>
                            <li id="circuitos" class="menu-item menu-item-type-post_type menu-item-object-page circuitos"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Circuitos') ) ); ?>">CIRCUITOS</a></li>
                        </ul>
                    </li>
                    <li id="noticias" class="menu-slide menu-item menu-item-type-post_type menu-item-object-page noticias"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Noticias') ) ); ?>">NOTICIAS</a></li>
                    <li id="servicios" class="menu-slide menu-item menu-item-type-post_type menu-item-object-page servicios"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Servicios') ) ); ?>">SERVICIOS</a></li>
                    <li id="contacto" class="menu-slide menu-item menu-item-type-post_type menu-item-object-page page_item page-item-79 current_page_item contacto"><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contacto') ) ); ?>" aria-current="page">CONTACTO</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</header>