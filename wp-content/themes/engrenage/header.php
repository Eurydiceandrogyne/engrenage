<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
  <header>
   
      <div class="small-12 medium-12 large-3 columns menu-1 vertical">
        <nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul  class="menu">
					<li class="home"><a href="<?php echo home_url( '/' ) ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt="logo"></a></li>
				</ul>
			</div>
			
		</nav>
        <?php foundationpress_top_bar(); ?>
      </div>
      <?php woocommerce_breadcrumb(); ?>
       
      <div class="small-12 medium-12 large-9 large-offset-3 columns menu-2">
        <div class="top-bar-right">
          <div class="top-bar-title">
            <!-- <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
              <button class="menu-icon dark" type="button" data-toggle></button>
            </span> -->
          </div>
          <div id="responsive-menu">
            <div class="top-bar-right">
             <ul class="menu">
             	<li><div><a href="<?php bloginfo('url') ?>/my-account" class="compte"></a></div></li>

	              <li><div><a href="<?php bloginfo('url') ?>/cart" class="panier"></a><div class="nombre"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></div></div></li>
	             <?php get_product_search_form(); ?>              
	              
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  
</header>  
	<!--<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt="logo"></a></li>
				</ul>
			</div>
			
		</nav>
		<section>
			<div class="accordeon-menu">
				<?php foundationpress_top_bar(); ?>
			</div>

		</section>
	</header>
	<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>-->
	<div class="row">
	<div class="small-12 medium-12 large-9 large-offset-3 columns">
		<?php
				// --> Injection slider my_slider 10
				do_action( 'foundationpress_after_header' );
				?>
		
