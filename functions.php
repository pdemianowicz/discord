<?php
/**
 * template-] functions and definitions
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pl0_k_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on template-], use a find and replace
		* to change 'template' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'template', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'template' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'pl0_k_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pl0_k_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pl0_k_content_width', 640 );
}
add_action( 'after_setup_theme', 'pl0_k_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pl0_k_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'template' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'template' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pl0_k_widgets_init' );


//SUPPORT FUNCTIONS FOR FILENAME LOCATION
function get_css_url(){
	return get_stylesheet_directory_uri() . "/css/style.css"; 
  
  }
  
  //ADD THE MAIN CSS FILE
  add_action( 'wp_enqueue_scripts',  function  () {
   
	  //ENQUEUE THE CSS FILE
	  wp_enqueue_style( 'template-style-styles', get_css_url(), array(), wp_get_theme()->get( 'Version' ) );
  
  });

/**
 * Enqueue scripts 
 */
function pl0_k_scripts() {

	wp_enqueue_script( 'template-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'template-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pl0_k_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





/** CLEAN HEAD */

function picostrap_cleanup() {

    /* CLEANUP THE HEAD */
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    
    /* DISABLE EMOJIS */   
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'picostrap_disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'picostrap_disable_emojis_remove_dns_prefetch', 10, 2 );
    add_filter('emoji_svg_url', '__return_false');

    //REMOVE REST API Link – api.w.org
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);

    // Remove the REST API endpoint.
    if(!is_user_logged_in()) remove_action( 'rest_api_init', 'wp_oembed_register_route' );

}
add_action( 'init', 'picostrap_cleanup' );

//more emoji 
function picostrap_disable_emojis_tinymce( $plugins ) {    if ( is_array( $plugins ) ) {    return array_diff( $plugins, array( 'wpemoji' ) );    } else {    return array();    }}

//more emoji 2
function picostrap_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
    $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }
    return $urls;
}

//Disable Self Pingbacks
add_action('pre_ping', 'disable_self_pingbacks');

function disable_self_pingbacks(&$links) {
     $home = get_option('home');
     foreach($links as $l => $link) {
         if(strpos($link, $home) === 0) {
             unset($links[$l]);
         }
     }
 }


// Show less info to users on failed login for security.
//(Will not let a valid username be known.)

function picostrap_show_less_login_info() { 
    return "<strong>ERROR</strong>: Stop guessing!"; }
add_filter( 'login_errors', 'picostrap_show_less_login_info' );

 
// Do not generate and display WordPress version
 
function picostrap_no_generator()  {     return ''; }
add_filter( 'the_generator', 'picostrap_no_generator' );



// FILTERS TO REMOVE IDS AND CLASSES FROM MENU ITEMS
// http://stackoverflow.com/questions/5222140/remove-li-class-id-for-menu-items-and-pages-list
// If you wish to not use these filters, then simply comment them.
//add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); //dont use this as breaks hierchical menus
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
//add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); //this removes stuff like 'page_item page-item-5139 current_page_item' from wp_list_pages, not always a good idea
function my_css_attributes_filter($var) {  return is_array($var) ? array() : ''; }




/////// DISABLE CF7 PLUGIN CSS  - optional  ///////////////////////////////////////////////////////////////
//add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
//function wps_deregister_styles() {    wp_deregister_style( 'contact-form-7' );}



// DISABLE WPEMBED /////////////////////////
// read about it: https://kinsta.com/knowledgebase/disable-embeds-wordpress/#disable-embeds-code
//does not block video embed
add_action( 'wp_footer',function (){  wp_deregister_script( 'wp-embed' ); });
add_action( 'init', 'picostrap_disable_embeds_code_init', 9999 );

function picostrap_disable_embeds_code_init() {
	
	// Turn off oEmbed auto discovery.
	add_filter( 'embed_oembed_discover', '__return_false' );
	
	// Don't filter oEmbed results.
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	
	// Remove oEmbed discovery links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	
	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'tiny_mce_plugins', 'picostrap_disable_embeds_tiny_mce_plugin' );
	
	// Remove all embeds rewrite rules.
	add_filter( 'rewrite_rules_array', 'picostrap_disable_embeds_rewrites' );
	
	// Remove filter of the oEmbed result before any HTTP requests are made.
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}

function picostrap_disable_embeds_tiny_mce_plugin($plugins) { return array_diff($plugins, array('wpembed')); }

function picostrap_disable_embeds_rewrites($rules) {
    foreach($rules as $rule => $rewrite) {        if(false !== strpos($rewrite, 'embed=true')) { unset($rules[$rule]); }    }
    return $rules;
}
/////// end disable WPEMBED

 
 

// REMOVE DEFAULT WP INLINE STYLE:  <style id='global-styles-inline-css'> and SVG filters on body open
// https://github.com/WordPress/gutenberg/issues/36834

function picostrap_wp_remove_global_css() {
   remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
   remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action( 'init', 'picostrap_wp_remove_global_css' );
