<?php

// Register Navigation
require_once('wp_bs_pagination.php');


// Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/wp_bs_navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// Custom CSS
function custom_css(){
    wp_register_style('custom-style', get_template_directory_uri().'/assets/css/custom-style.css', array(), false, 'all');
    wp_enqueue_style('custom-style');
}
add_action('wp_enqueue_scripts', 'custom_css');


//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Thumbnail Size
add_image_size('content-thumb', 139, 139,true);


// Menus
function register_my_menus(){
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function set_excerpt_length(){
    return 12;
}
add_filter('excerpt_length', 'set_excerpt_length');

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Custom Post Type for "Publications"
function typePublications(){
    $args = array(
        'labels' => array(
            'name' => "Publications",
            'singular_name' => "Publication"
        ),
        'menu_icon' => 'dashicons-text-page',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'custom-fields')
    );

    register_post_type('publications', $args);
}
add_action('init', 'typePublications');



// Login Logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/scbd-logo.png);
		height:65px;
		width:320px;
		background-size: 270px 100.5px;
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );
add_filter( 'login_display_language_dropdown', '__return_false' );

?>