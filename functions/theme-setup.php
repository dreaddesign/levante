<?php
/* == custom styles for wysiwyg editor =============================================== */
add_editor_style('editor-style.css');


/* == make sure rss info is added to head ============================================ */
add_theme_support('automatic-feed-links');


/* == add WP 3.0 menu support ======================================================== */
add_theme_support('menus');


/* == add thumbnail and featured image support ======================================= */
add_theme_support('post-thumbnails');


/* == remove admin bar =============================================================== */
add_filter('show_admin_bar', '__return_false');


/* == Removes the default link on attachments  ======================================= */
update_option('image_default_link_type', 'none');


/* == Remove the version number of WP  =============================================== */
remove_action('wp_head', 'wp_generator');


/* == remove funky formatting caused by tinymce advanced ============================= */
function fixtinymceadv($text)
{
    $text = str_replace('<p><br class="spacer_" /></p>','<br />',$text);
    return $text;
}
add_filter('the_content',  'fixtinymceadv');


/* == Obscure login screen error messages ============================================ */
function login_obscure()
{
    return '<strong>Sorry</strong>: Information that you have entered is incorrect.';
}
add_filter('login_errors', 'login_obscure');


/* == Add blog name to title ========================================================= */
function ip_alter_title($title, $sep) {
    $title .= get_bloginfo('name');
    return $title;
}
add_filter('wp_title', 'ip_alter_title', 10, 2);

/* == Queue up all css & js files ==================================================== */
function ip_scripts_styles()
{
    wp_enqueue_script('ip_script', get_template_directory_uri() . '/js/theme.js',array('jquery'), null, true);
    wp_enqueue_style('ip_style', get_template_directory_uri() . '/scss/global.css', false, null);
    wp_enqueue_script('ip_equalheights_script', get_template_directory_uri() . '/js/jquery.matchHeight-min.js',array('jquery'), null, true);
    wp_enqueue_script('ip_cycle_script', get_template_directory_uri() . '/js/jquery.cycle2.min.js',array('jquery'), null, true);
    wp_enqueue_script('ip_cycle_caro_script', get_template_directory_uri() . '/js/jquery.cycle2.carousel.min.js',array('jquery'), null, true);
    wp_enqueue_script('header_script', get_template_directory_uri() . '/js/classie.js',array('jquery'), null, true);
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', false ); 
    wp_enqueue_style( 'wpb-google-fonts-script', 'https://fonts.googleapis.com/css?family=Seaweed+Script', false );
    if (is_singular('post')){
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ip_scripts_styles');

/* == adds iOS icons and favicon ===================================================== */
function ip_header_icons()
{
    $output = '';
    //$output .= '<link rel="apple-touch-icon" sizes="144x144" href="' . get_template_directory_uri() . '/images/apple-touch-icon-144x144.png" />' . "\n";
    //$output .= '<link rel="apple-touch-icon" sizes="114x114" href="' . get_template_directory_uri() . '/images/apple-touch-icon-114x114.png" />' . "\n";
    //$output .= '<link rel="apple-touch-icon" sizes="72x72" href="' . get_template_directory_uri() . '/images/apple-touch-icon-72x72.png" />' . "\n";
    //$output .= '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/images/apple-touch-icon-57x57.png" />' . "\n";
    $output .= '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/favicon.ico" />' . "\n";
    echo $output;
}
add_action('wp_head', 'ip_header_icons');


/* == Events Calendar Week Date Edit ===================================================== */
add_filter( 'tribe_events_this_week_date_format', 'tribe_remove_suffix_from_this_week_date' );
 
function tribe_remove_suffix_from_this_week_date( $date ) {
    return 'n/j';
}

add_filter("tribe_get_event_website_link_label", "rewrite_website_link_label");
function rewrite_website_link_label($label){
    return "View Site >>"; 
}

add_filter("tribe_get_event_website_link_target", "target_website_link_label");
function target_website_link_label($label){
    return "_blank"; 
}


/* == EXCERPT ========== */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/* == add additional options pages ========== */
register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu' ) );


/* == add additional options pages ========== */
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}
?>