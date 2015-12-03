<?php
require_once( get_template_directory() . '/inc/style-login.php' );
if ( ! function_exists( 'maringapk_setup' ) ) :

function maringapk_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'maringapk-full-width', 1038, 576, true );

	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'maringapk' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'maringapk' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

}
endif; // maringapk_setup
add_action( 'after_setup_theme', 'maringapk_setup' );

/**/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
/**/

// Registro bootstrap menu
require_once('inc/wp_bootstrap_navwalker.php');


/**/
function maringapk_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'maringapk' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'maringapk' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'maringapk' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'maringapk' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'maringapk' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'maringapk' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'maringapk_widgets_init' );


function maringapk_scripts() {

	wp_enqueue_style( 'maringapk-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'maringapk_scripts' );


function maringapk_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'maringapk' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'maringapk_wp_title', 10, 2 );


function annointed_admin_bar_remove() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

function change_footer_admin () {
	return '&nbsp;';
}
add_filter('admin_footer_text', 'change_footer_admin', 9999);

function change_footer_version() {
	return ' ';
}
add_filter( 'update_footer', 'change_footer_version', 9999);


// cria o custom post type Alimentacao

require( get_template_directory() . '/inc/content-alimentacao.php' );


/* MENU WALKER */


class My_Walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><h4>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</h4><span class="sub">' . $item->description . '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/********************************
*********** JAVASCRIPT **********
*********************************/

function add_this_script_footer(){

	wp_enqueue_script('jquery');

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'bootstrap' );

	wp_register_script( 'classie', get_template_directory_uri() . '/js/classie.js' );
	wp_enqueue_script( 'classie' );

	wp_register_script( 'pathLoader', get_template_directory_uri() . '/js/pathLoader.js' );
	wp_enqueue_script( 'pathLoader' );

	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js' );
	wp_enqueue_script( 'main' );

	wp_register_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js' );
	wp_enqueue_script( 'nicescroll' );

	wp_register_script( 'owlcarousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.js' );
	wp_enqueue_script( 'owlcarousel' );

	wp_register_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/source/jquery.fancybox.pack.js' );
	wp_enqueue_script( 'fancybox' );

	wp_register_script( 'include', get_template_directory_uri() . '/js/include.js' );
	wp_enqueue_script( 'include' );



}
add_action('wp_footer', 'add_this_script_footer');