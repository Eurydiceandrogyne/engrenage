<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'engrenage');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?9ecAO}rk5gfEa-j(Ka0TwwHLbll7cl`W?X]&R5Cnk>VEAW }^Lq+-{LZN#`*M$x');
define('SECURE_AUTH_KEY',  'fN|Erx:u$#;].snN3>Uh=tuW/ AX9`k<(vJeV*-4KTG_tLQ~O-CG|s-9(xjx@OiR');
define('LOGGED_IN_KEY',    '7tR;LDASHIX(^0OvOue>g61KhUO^Q`:#Wz^6nGTi]C:Q3|:+4OSWo)04-}zl3hZg');
define('NONCE_KEY',        's/oa6<%E1:-{cdPy$G`-jyOOF+e4XX;sD3;-y~^_IX-Q~ )!|j/85MI3<}Nm9weE');
define('AUTH_SALT',        'TFx`]-$@-m>k=`Z)Z Q=GeU8&CI;1++.f3w!wYn8;gNWE[j=q[H@U+i>dxLKOe0H');
define('SECURE_AUTH_SALT', '/j*E9]R8_G)!*9EtyihPwr;#{,Dzt]uW}Yt*L`kP_,g[<5i8vJAHwkM-&y^m}jCA');
define('LOGGED_IN_SALT',   'C2=$Z5GlwZ,=~MDt@V_S5C=Mb1d @u;+U<(C{Ys!8k{-5O:qkI8BW;Tv!nsDxg4^');
define('NONCE_SALT',       '35<!)#iy+tjv$dqTYX&;WKgdSlLw+3BN/b:PU0.oc?e{rQ@1kg1rFLwl,nb4i/}:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = '16_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');