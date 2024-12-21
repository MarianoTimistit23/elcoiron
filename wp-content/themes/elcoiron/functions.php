<?php

if ( ! function_exists( 'elCoiron_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
    function elCoiron_setup() {
            
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

    }
endif; 
add_action( 'after_setup_theme', 'elCoiron_setup' );


/**
 * Scripts + Styles Enqueue
 */
function elCoironScriptsAndStyles () {

    /* --- Styles --- */
    // Disable block editor css
    wp_dequeue_style('wp-block-library');

    // Global
    wp_enqueue_style('main-styles',  get_theme_file_uri() . '/assets/css/styles.css', array(), filemtime(get_template_directory() . '/assets/css/styles.css'));

    // Homepage
    if ( is_page_template('templates/page-home.php') ) {
        wp_enqueue_style('homepage-styles',  get_theme_file_uri() . '/assets/css/pages/homepage.css', array(), filemtime(get_template_directory() . '/assets/css/pages/homepage.css'));
        /*wp_enqueue_script('homepage-scripts',  get_theme_file_uri() . '/assets/js/dist/pages/homepage.js', array('jquery'), filemtime( get_template_directory() . '/assets/js/dist/pages/homepage.js'), true);*/
    }

    // Disable Emojis
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('wp_enqueue_scripts', 'elCoironScriptsAndStyles');

/**
 * Disable JQuery Migrate
 */
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
         $script = $scripts->registered['jquery'];
        if ( $script->deps ) { 
            // Check whether the script has any dependencies
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

/**
 * Custom Wysiwyg.
 */
//require get_template_directory() . '/inc/custom-wysiwyg.php';

/**
 * Enable ACF Theme Options.
 */
require get_template_directory() . '/inc/acf-options-pages.php';

/**
 * Register Custom Menus.
 */
require get_template_directory() . '/inc/custom-menus.php';

/**
 * Disable Guttenberg Editor and Hide Classic.
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_action('admin_head', 'remove_content_editor');
function remove_content_editor() { 
    remove_post_type_support('page', 'editor');        
}

?>