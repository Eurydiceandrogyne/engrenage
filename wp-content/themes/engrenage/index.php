<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

    <div class="row">
      <h2>Meilleures ventes</h2>
             <?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3,
			'meta_key' => 'total_sales',
			'oderby' => 'meta_value_num'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/meilleures-ventes', get_post_format() );
			endwhile;
		} else {
			echo __( 'Erreur de chargement des produits' );
		}
		wp_reset_postdata();
	?>
    </div>  

<div class="row">
       <h2>Nos marques</h2>
       <?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 45,
			'product_cat' => 'montre'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				get_template_part( 'template-parts/montre-apercu', get_post_format() );
			endwhile;
		} else {
			echo __( 'Erreur de chargement des produits' );
		}
		wp_reset_postdata();
	?>
 </div>

<section class="actu">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns actus">
      <h2>Actualités</h2>

     

			 <?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					);
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part( 'template-parts/actus', get_post_format() );
					endwhile;
				} else {
					echo __( 'Erreur de chargement des articles' );
				}
				wp_reset_postdata();
			?>

	
 </div>  
 </div>   
</section>
<?php get_footer(); ?>
