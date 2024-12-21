<?php
/*
Template Name: Homepage
*/
get_header('');
?>

<section class="front-page">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="">
    <!-- Hosteria -->
    <div class="hosteria">
        <div class="content">
            <h2 class="title">Hostería</h2>
            <div class="buttons">
                <a href="/hosteria" class="button">Conocé Más</a>
                <a href="#" class="button">Reservas</a>
            </div>
            <a href="#" class="mobile-cta">Ingresar</a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/hosteria-frente.jpg" alt="">
    </div>
    <!-- Divider -->
    <div class="divider"></div>
    <!-- Apart -->
    <div class="apart">
        <div class="content">
            <h2 class="title">Aparts</h2>
            <div class="buttons">
                <a href="/aparts" class="button">Conocé Más</a>
                <a href="#" class="button">Reservas</a>
            </div>
            <a href="#" class="mobile-cta">Ingresar</a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/aparts-frente.jpg" alt="">
    </div>
</section>

<?php
get_footer();
?>