<?php 
// Exit if accessed directly 
if ( !defined( 'ABSPATH' ) ) exit;

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

// END ENQUEUE PARENT ACTION

// Ajout de la fonction pour charger les styles du thème enfant 
add_action('wp_enqueue_scripts', 'theme_enqueue_styles'); 
function theme_enqueue_styles() { 
    // Enqueue the parent style 
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css'); 
    // Enqueue the child style 
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css')); 
}

// Fonction pour ajouter un lien "Admin" au menu
// Ajout de la fonction au filtre wp_nav_menu_items
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);
function ajouter_lien_admin($items, $args) {
    // Vérifiez si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajoutez le lien "Admin" au menu
        $admin_url = admin_url(); // Utilisez admin_url() pour obtenir l'URL correcte
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="' . esc_url($admin_url) . '">Admin</a></li>';
    }
    return $items;
}

