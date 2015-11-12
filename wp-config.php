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
define('DB_NAME', 'kawaweb');

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
define('AUTH_KEY',         '*[@!L]% 4&LV.SQFBL,!u6X9gCBjKPrBZ@3-1!|<-&*yICLo!D*{8S|!975%:h(<');
define('SECURE_AUTH_KEY',  '5][UvF}4@2$6=a}3#P/IK1JE<_c`]!rWoQYW~Hpsc]Cneq.g 9#5(?QLO`-z;E4*');
define('LOGGED_IN_KEY',    '_tvW55H5[!CIw@4nkHvl0(ZM/+,t9}2F2K8:*6}>iJoKyduBP94mO_f+n5zopdq4');
define('NONCE_KEY',        'G!p2Y=I,Y.Qw>n7UIRld-WbKy?W$-rx$+%P:+v{8.4UQm+4l>JYNuDa _4:k]kzJ');
define('AUTH_SALT',        'Qs@Q,{s}.`>lrFt}clbjfkgqfJ-g5S&z/gEDwo vyOP2O|neHyhF.yhEuCbRMss^');
define('SECURE_AUTH_SALT', 'k$X&0n|}B~(:S-y-Uc3620s<!W#tyw.CqjWicccVhA1`@j)q$+N<N~RWd_;XnM#:');
define('LOGGED_IN_SALT',   'IBV *b0{zJfB_|%ls)4>Q2YnhPqjXahEBpM}~|GOzRjAc)k^.x}FBvR$M6@WrG*:');
define('NONCE_SALT',       'J[&zqHl.p)mT0SH6T#*g4d+*Ez**etOb])m..uGLd>X%!.B=-4{_E,Jf48&kZr12');
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