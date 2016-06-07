<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


     <div class="small-12 medium-12 large-12 columns icones">
    <div class="small-12 medium-4 large-4 columns bim">
      <a href="<?php the_permalink(); ?>"><img src="http://localhost/engrenage/wp-content/themes/engrenage/assets/images/paiement.png" alt="paiement-securise"/></a>
      <p>Paiements sécurisés</p>
    </div>
    <div class="small-12 medium-4 large-4 columns bim">
      <a href="<?php the_permalink(); ?>"><img src="http://localhost/engrenage/wp-content/themes/engrenage/assets/images/service.png" alt="service-client"/></a>
      <p>Service client par téléphone</p>
    </div>
    <div class="small-12 medium-4 large-4 columns bim">
      <a href="<?php the_permalink(); ?>"><img src="http://localhost/engrenage/wp-content/themes/engrenage/assets/images/livraison.png" alt="livraison-retour"/></a>
      <p>Livraison et retour gratuit</p>
    </div>
  </div>

		<footer>
      <div class="small-12 medium-12 large-12 columns">
			<div class="small-12 medium-6 large-3 columns footer">
        <h4>Informations:</h4>
        <ul>
          <li><a href="<?php bloginfo('url') ?>/a-propos">À propos de nous</a></li>
          <li><a href="<?php bloginfo('url') ?>/contactez-nous">Contactez-nous</a></li>
          <li><a href="<?php the_permalink(); ?>">Confidentialité</a></li>
          <li><a href="<?php the_permalink(); ?>">Plan du site</a></li>
          <li><a href="<?php the_permalink(); ?>">Crédits</a></li>
        </ul>
      </div>
      <div class="small-12 medium-6 large-3 columns footer">
        <h4>Aide et assistance:</h4>
        <ul>
          <li><a href="<?php the_permalink(); ?>">Mentions légales</a></li>
          <li><a href="<?php the_permalink(); ?>">Livraisons et retours</a></li>
          <li><a href="<?php the_permalink(); ?>">CGV</a></li>
        </ul>
      </div>
      <div class="small-12 medium-6 large-3 columns footer f">
        <h4>Suivez-nous sur les réseaux-sociaux:</h4>
        <a href="<?php the_permalink(); ?>" class="facebook"></a>
        <a href="<?php the_permalink(); ?>" class="twitter"></a>
        <a href="<?php the_permalink(); ?>" class="pinterest"></a>
      </div>
      <div class="small-12 medium-6 large-3 columns footer">
        <h4>Inscription à notre newsletter:</h4>
        <label>
          <input type="text" placeholder="Entrez votre e-mail ici !"/>
        </label>
        <input type="submit" placeholder="Je m'inscris !"/>
      </div>
    </div>
 </div>
 <script src="http://localhost/engrenage/wp-content/themes/engrenage/assets/javascript/js/vendor/jquery.js"></script>
<script src="http://localhost/engrenage/wp-content/themes/engrenage/assets/javascript/js/vendor/foundation.js"></script>
<script src="http://localhost/engrenage/wp-content/themes/engrenage/assets/javascript/js/vendor/what-input.js"></script>
<script src="http://localhost/engrenage/wp-content/themes/engrenage/assets/javascript/js/app.js"></script>
</footer>
<script type="text/javascript">
  $('.woocommerce-product-search > input[type="search"]').replaceWith('<input name="s" type="search" placeholder="Rechercher" value class="search-field" title="Rechercher">');
</script>
		<?php do_action( 'foundationpress_layout_end' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
