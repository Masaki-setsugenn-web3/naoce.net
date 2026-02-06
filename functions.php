<?php
function my_template_css() {
  wp_enqueue_style( 'my-template-style', get_stylesheet_uri() );
}
function my_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . 'js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_template_css','my_scripts' );
?>

<?php add_theme_support('post-thumbnails');
?>
<?php
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; 
        $args['has_archive'] = 'archive'; 
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
?>

