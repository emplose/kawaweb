<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'kawawebfnjadmin');

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
define('AUTH_KEY',         ';8?}>c+!Yf+EmS[Xj:Wj2yV67g--yR^wOsWu(>K9M0o|yEW.Dlb|cj?*bZf!A?`u');
define('SECURE_AUTH_KEY',  'e$-Tj.,0WH$8PCn||_1P^<A*-T?uF;+ &q!p%c88JK!z,-VCT|l>!E/lJ!3HEl/_');
define('LOGGED_IN_KEY',    '5ntfZ;w,>8m[kF!& 3FV|^|?Eq/@r^bLwf[Ss~-}-V:n6iF4>Ry^vI{psztkH]H0');
define('NONCE_KEY',        'k$$Mh7?V]D/$kz*|ZIk`W`Dp~EgR%]E|Lbz+e3h!O*lU*@#T:)}Cujp]~@vz-%Bb');
define('AUTH_SALT',        't-0BNs+T0KP6{~4muSQ;n_Zf+e;r&WH,}lp-+6>ZKIgq?ztU<G?Q|75X]7/+vc-5');
define('SECURE_AUTH_SALT', 'AZA*K}Vfk_?0Tuy:{th-,nWncOOecDS5(E9[@#n=.*`u+8,ZwIMnQ${D:cwl@kq[');
define('LOGGED_IN_SALT',   '?oFkGqUqr+0U>-DP0.[a*P9i-`W:3D_#jLVZ~R uhKj?W5kl!i5rFPU^1uK#;VZA');
define('NONCE_SALT',       'W?ae3Rv_2DXCxKIKwLJ6@RM>Q@[C+Z3t@kJ4z-s[ :Y9)_ca.tc S*x9GE/LLCY;');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');