<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
//include('shortcode.php');
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        //wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
		//if(!is_front_page())
		//{
        //wp_enqueue_style( 'chld_thm_cfg_parent_style_other_pages', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/style_other_pages.css', array(  ) );
		//}
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
function perfect_grount_scripts() {
    // all styles;
    //wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/app/dist/font-awesome.css', array(), 20230403 );
	// all scripts
    //wp_enqueue_script( 'jquery.min', get_stylesheet_directory_uri() . '/app/js/jquery.min.js', array('jquery'), '20230403', true );
}
add_action( 'wp_enqueue_scripts', 'perfect_grount_scripts' );

//svg upload
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
//Menu Register
/*
* Creating a function to create our CPT Theme Options
*/  
function custom_post_type_theme_option() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Theme Options', 'Post Type General Name', 'theperfectgrount' ),
        'singular_name'       => _x( 'Theme Option', 'Post Type Singular Name', 'theperfectgrount' ),
        'menu_name'           => __( 'Theme Options', 'theperfectgrount' ),
        'parent_item_colon'   => __( 'Parent Theme Option', 'theperfectgrount' ),
        'all_items'           => __( 'All Theme Options', 'theperfectgrount' ),
        'view_item'           => __( 'View Theme Option', 'theperfectgrount' ),
        'add_new_item'        => __( 'Add New Theme Option', 'theperfectgrount' ),
        //'add_new'             => __( 'Add New', 'theperfectgrount' ),
        'edit_item'           => __( 'Edit Theme Option', 'theperfectgrount' ),
        'update_item'         => __( 'Update Theme Option', 'theperfectgrount' ),
        'search_items'        => __( 'Search Theme Option', 'theperfectgrount' ),
        'not_found'           => __( 'Not Found', 'theperfectgrount' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'theperfectgrount' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Theme Options', 'theperfectgrount' ),
        'description'         => __( 'Theme Option', 'theperfectgrount' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
    // Registering your Custom Post Type
    register_post_type( 'Theme Options', $args );
}
add_action( 'init', 'custom_post_type_theme_option', 0 );
 
//Register Menu
register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary menu', 'theperfectgrount' ),
            )
        );
//add li class in Menu
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_theme_support('post-thumbnails', array(
'post',
'page',
'products',
));
function custom_filter_wpcf7_is_tel( $result, $tel ) {
  $result = preg_match( '/^[0-9]{10}+$/', $tel  );
  //$result1 = preg_match( '/^[0][2][0-9]{8}+$/', $tel );
  return $result;
 // return $result1;  
}
add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );
add_filter( 'wpcf7_validate_text', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_text*', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_textarea', 'no_urls_allowed', 10, 3 );
add_filter( 'wpcf7_validate_textarea*', 'no_urls_allowed', 10, 3 );
function no_urls_allowed( $result, $tag ) {
  $tag = new WPCF7_Shortcode( $tag );
  $type = $tag->type;
  $name = $tag->name;
  $value = isset( $_POST[$name] )
    ? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
    : '';
  // If this is meant to be a URL field, do nothing
  if ( 'url' == $tag->basetype || stristr($name, 'url') ) {
    return $result;
  }
  // Check for URLs
  $value = $_POST[$name];
  $not_allowed = array( 'http://', 'https://', 'www.', '[url', '<a ', ' seo ' );
  foreach ( $not_allowed as $na ) {
    if ( stristr( $value, $na ) ) {
      $result->invalidate( $tag, 'URLs are not allowed' );
      return $result;
    }
  }
  return $result;
}