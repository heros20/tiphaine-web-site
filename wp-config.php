<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tiphaine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '69|EG+9>=Z3-e+,aL4cU(:Ls6|~8$_evB@RN&[{]d{9Mmv:jhnvh?|[Wo}rAl!+P' );
define( 'SECURE_AUTH_KEY',  'HP!RcSdz`OLd1|u/{d->osMK5D^3bXy9Kx!3K|R/}uC>X:xa<!OF{e2jGzr4UwV5' );
define( 'LOGGED_IN_KEY',    'I/xetM^|XI,3X0[^g4%Szc:~)HtE`|sY3&7tOD,n;,x{lrQ^+9TumL]7uI/sd6)w' );
define( 'NONCE_KEY',        'u`Y<f5$eQoS5z9p0&41sJs[^Sm ]]|8;O9S>1$>D]yP{=<98hbh3O3+y-fxG&jy/' );
define( 'AUTH_SALT',        ';(N3NqE.o PBU|KEOc!c(9z0_ORttZyi Ll;fAqMqTv*,UJ3Z*#Bc8@N6A4Xb-uj' );
define( 'SECURE_AUTH_SALT', '*sW<%xO89ONGySN&H]*[@aSL~7cRwyFroV31DA$RN4SP7^nje/sN)tps:E8OH4f~' );
define( 'LOGGED_IN_SALT',   '@4rgeyO:09l@POJsrsE5%?`0cDy#(M0=a=W5Ua<3(8ipv+}c8fyE%TaL/3Md}Zb`' );
define( 'NONCE_SALT',       'KNzeLr0CoKBHvDt4%;Yuj9w{&s3A|/ D@E0MI?JUs+`)? S(.-56aZFZ(13s[Y`j' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'tiph_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
