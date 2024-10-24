<?php

function create_custom_post_types() {
    
    // Services
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'has_archive' => true,
            'public' => true,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-store',
        )
    );

    // Services
    register_post_type( 'incorporations',
        array(
            'labels' => array(
                'name' => __( 'Company Incorporation Plans' ),
                'singular_name' => __( 'Company Incorporation Plans' )
            ),
            'has_archive' => true,
            'public' => true,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-businessman',
        )
    );

    // FAQ's
    register_post_type( 'faqs',
        array(
            'labels' => array(
                'name' => __( 'FAQs' ),
                'singular_name' => __( 'FAQ' )
            ),
            'has_archive' => false,
            'public' => true,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-editor-help',
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

?>
