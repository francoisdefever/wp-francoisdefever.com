<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'FD');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'fdefever');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '6666NAna6666');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BpjmO4o.Qy 0TH^,8S%]EKQ9[k:u>lY#(>EY$G>oW2eh4wvyN)QeENq>)6ywA/ P');
define('SECURE_AUTH_KEY',  'mc8Do6z=pG9~|k ^/;i[v?97LH_IxkNdPz(!O`&DlWr!jlsN9$^;QpWmIIk}R%w:');
define('LOGGED_IN_KEY',    'h#<I sSr|<`p BmkRC [E4<ss/4 s|8cH{^ai|R8l?#?>]l+,[P$$AOPErogX`ej');
define('NONCE_KEY',        '{v~Sqljzx!+{V0vx[*~0B1 ZbocyKp4rGN@hmV~{7^;Cboh^-~rTniYnVisg&WdJ');
define('AUTH_SALT',        'gzo:8Ba-R(Z}8E/W3!mu;GF0O,OqZdPFEes^i}ie+&5pDisi:(vIu#?L0rur>mn~');
define('SECURE_AUTH_SALT', 'uxVv#U*<:,=xtJmh@4VmrNO,WuY2ec Uoksl#cB+;Se|4)Hh{&+8R!dL$]`u$2^1');
define('LOGGED_IN_SALT',   ':#}Y7*H=%f/o1CDq2p+L 1:VTou`XcvFZ=@aiRp,|sXn)wM5,TvK.kKFFM%m!TFD');
define('NONCE_SALT',       '*h+*Wi4yPLiOk*/!x}UvIfc4w::gXE&8l`1E~K9*fmjb+`kha$+x+46`^4YuD<ae');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');