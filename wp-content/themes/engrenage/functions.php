<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');


// --> Premier test pour actions
    add_action('woocommerce_single_product_summary', 'testPourriATitreDexemple', 15);
// --> Changement d'ordre on met le prix au dessus du titre
    // 1. Supprime l'action initiale d'affichage du titre
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    // 2. Je change sa priorité
        add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 1);
// --> Titre du produit sur l'image...
    // 1. On enleve le titre du produit du DIV concerné
    //remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    // 2. fonction rajouté dans le fichier single-product/product-image.php
function my_slider() {
    if (is_front_page() || is_home())
    {
        get_template_part( 'template-parts/slider' );
            
    }
}
add_action('foundationpress_after_header', 'my_slider', 10);



    register_sidebar(array(
      'id' => 'top-widgets',
      'name' => __( 'top widgets', 'foundationpress' ),
      'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
      'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>',
    ));

add_action('widgets_int', 'register_sidebar');