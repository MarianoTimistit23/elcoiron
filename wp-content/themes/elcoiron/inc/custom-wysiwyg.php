<?php

// Escape Wysiwyg
function esc_wysiwyg($wysiwyg) {
    $wysiwyg = wp_kses($wysiwyg, 'post');
    return $wysiwyg;
}

// Custom Wysiwyg
add_filter( 'acf/fields/wysiwyg/toolbars' , 'only_bold'  );
function only_bold( $toolbars ) {

    $toolbars['Only Bold'] = array();
    $toolbars['Only Bold'][1] = array('bold');

    return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'only_link'  );
function only_link( $toolbars ) {

    $toolbars['Only Link'] = array();
    $toolbars['Only Link'][1] = array('link');

    return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'link_and_bold'  );
function link_and_bold( $toolbars ) {

    $toolbars['Link and Bold'] = array();
    $toolbars['Link and Bold'][1] = array('bold', 'link');

    return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars' , 'single_services'  );
function single_services( $toolbars ) {

    $toolbars['Services (Single)'] = array();
    $toolbars['Services (Single)'][1] = array('bold', 'bullist');

    return $toolbars;
}

?>
