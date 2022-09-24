<?php


function tarik_theme_support(){
    // ajouter le support de titres dynamiques
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
}

add_action('after_setup_theme','tarik_theme_support');


// enregister des menu locations 
function tarik_register_menus()
{
    $locations = array(
        'primary' => 'desktop top menu',
        'footer' => 'footer menu'
    );

    register_nav_menus($locations); 
}

add_action('init','tarik_register_menus');

// ajouter un format d'image personnalisé

function register_custom_image_size()
{
    add_image_size('custom-project-thumbnail',480,480,false);
}

add_action('init','register_custom_image_size');

function tarik_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('tarik-css',get_template_directory_uri()."/style.css",array(),$version,'all');
    wp_enqueue_style('tarik-font-awesome',get_template_directory_uri()."/assets/fontawesome/css/all.css",array(),'6.1.2','all');   
}

function tarik_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('main-script',get_template_directory_uri()."/js/main.js",[],$version,'all');
    wp_enqueue_script('jquery',"https://code.jquery.com/jquery-3.6.0.slim.min.js",[],'3.6.0',false);
    wp_enqueue_script('jquery-progress-bar',"https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/0.6.1/progressbar.js",[],'0.6.1',false);
    wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-scroll-trigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-observer', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Observer.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-scrollTo', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js",[],'3.10.4',false);
    wp_enqueue_script('splide-slide', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js",[],'4.0.7',true);
}




add_action('wp_enqueue_scripts','tarik_register_styles');

add_action('wp_enqueue_scripts','tarik_register_scripts');

 
function register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
        // 'taxonomies' => array( 'category' ),
	);

	register_post_type( 'portfolio', $args );

        // Déclaration de la Taxonomie
    $labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
    	'parent_item' => 'Type de projet parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'type-projet', 'portfolio', $args );


}
add_action( 'init', 'register_post_types' ); // Le hook init lance la fonction


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Jumbotron', 'TarikTheme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'TarikTheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

require_once __DIR__ . '/includes/classes/Device.php';


?>
