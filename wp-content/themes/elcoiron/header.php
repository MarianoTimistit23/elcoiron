<!DOCTYPE html>
<html <?php language_attributes(); ?> >

	<!-- Head -->
    <head>
        <title>El Coiron - Hostería y Aparts</title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Easepick -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/easepick.css">
        <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/easepick.bundle.min.js"></script>
        <!-- WP Head -->
        <?php wp_head(); ?>
    </head>

	<!-- Body -->
    <body <?php body_class($post->post_name);?>>

		<!-- Header --> 
		<header class="header js-header">
            <div class="header__container container">
                <!-- Logo -->
                <a href="/" class="header__logo-link">
                    <img src="" alt="Logo Hosteria El Coiron" class="header__logo">
                </a>           
                <!-- Nav -->
                <nav class="header__menu">
                    <a href="#" class="header__menu-item">Habitaciones</a>
                    <a href="#" class="header__menu-item">Servicios</a>
                    <a href="#" class="header__menu-item">Contacto</a>
                </nav>
            </div>
		</header>
        


