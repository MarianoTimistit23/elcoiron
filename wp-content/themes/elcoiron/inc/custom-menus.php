<?php

function custom_menus() {
    register_nav_menus(
        array(
            'navbar-menu' => __( 'Navbar Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'footer-services-menu' => __( 'Footer Services Menu' ),
        )
    );
}
add_action( 'init', 'custom_menus' );

?>