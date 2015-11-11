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
define('DB_NAME', 'wp-kawaweb');

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
define('AUTH_KEY',         'HZR0s9{}@0}cH0sivclFw-r&-)k3sZdaFv7Y+,98 w6zB(|V=B$_Anyi.|R{S4XR');
define('SECURE_AUTH_KEY',  'b<=_@Yb#:In.4SD~#c/UQppHB2Q3BwllOq0QeyIFxby9Z[WibG!YP`:>Rl9J% >K');
define('LOGGED_IN_KEY',    'H=n2!=Mt`3v[o>ipe%7R[E2EJYe9WEjKSiDRi]WZ>aN[Sg++a.>Z=`TG<qf&,~Z$');
define('NONCE_KEY',        '&S>+>)|@igR^G1-=(_lwY_+dP0FFavfGbM!,#,YO)c{+(&BMb_-</MY<^ydlM8Pn');
define('AUTH_SALT',        'Ubxw}KZz@y^N^gDM090,m<jFJyNKU4+9dv[jGNQO-$<r)Wwv,7TjYzO3Kk516!%6');
define('SECURE_AUTH_SALT', ')6ql0s#(Gq2nAMyx2/,%l>vZ*DG^o>=C;cS-0>f]|VqEV!WyD>/rT.-TDiNw)]g#');
define('LOGGED_IN_SALT',   'RU-yL>C-X~O1!nFM1#2;2=^<&C%TARD||B?8P|;3{A4>Jix;~ErIXqHR*DDU8GTu');
define('NONCE_SALT',       'irpCu*ieR0eHbT);VNT;*8bLQ|md/&$6|2pW#M/r*YJc!E-bS1<XKIjR~JKlAI(2');
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