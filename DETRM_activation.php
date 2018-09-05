<?
function detrm_setup_post_type() {
    // register the "book" custom post type
    register_post_type( 'book', ['public' => 'true'] );
}
add_action( 'init', 'pluginprefix_setup_post_type' );

function detrm_activate() {
    // trigger our function that registers the custom post type
    detrm_setup_post_type();

    // clear the permalinks after the post type has been registered
    flush_rewrite_rules();
}
?>
